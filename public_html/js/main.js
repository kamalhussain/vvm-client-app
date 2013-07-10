$(document).ready(function() {

    /**
     * merge two or more JSON objects to one
     * @returns {unresolved}
     */
    Array.prototype.mergeAll = function() {
        var results = {};

        this.forEach(function(subArray) {
            console.log("inside loop");
            results = $.extend(results, subArray);
        });

        return results;
    };

    Array.prototype.filter = function(pf) {
        var results = [];
        this.forEach(function(item) {
            if (pf(item)) {
                results.push(item);
            }
        });

        return results;
    };

    var data = {
        access_token: "3s7ccdz5jqejlfejnsa9lbyi62iyu51y"
    };

    var buildUI = function(parent, items) {
        $.each(items, function() {
            //var li = $("<tr>" + "</tr>");
            //li.appendTo(parent);

            var ul = $("<tr></tr>");
            ul.appendTo(parent);
            
            var buttons = '<td> <a class="btn btn-small btn-primary href="#"><i class="icon-play icon-white"></i> Play</a></td>' +
                    '<td> <a class="btn btn-small href="#"><i class="icon-trash"></i> Delete</a></td>';
                    
            var li2 = $("<td>" + this.Date + "</td><td>" + this.From + "</td>" + buttons);
            li2.appendTo(ul);
        });
    };

    $.ajax({
        type: "GET",
        data: data,
        dataType: "json",
        //url: "https://api.foundry.att.com/a1/voicemail/messages",
        url: "vvm-get-messages.php",
        success: function(msg) {
            var vmData = [];
            messages = msg.Body.getMessageHeadersResponse.messageHeadersVector;

            $.each(messages, function(k, v) {
                item = {};

                item = v.messageHeader.headersVector.filter(function(rec) {
                    if ((rec.name === "Date") || (rec.name === "From")) {
                        return true;
                    }

                    return false;

                }).map(function(item2) {
                    var json = {};
                    json[item2.name] = item2.value;
                    return json;

                }).mergeAll();

                //item.push({id: v.messageHeader.messageUID});
                item["id"] = v.messageHeader.messageUID;
                console.log(JSON.stringify(item));
                vmData.push(item);
            });

            console.log(JSON.stringify(vmData));

            //var ul = $("<ul></ul>");
            //ul.appendTo("#vm-headers");
            buildUI("#vm-headers", vmData);
        },
        error: function(xhr, err) {
            console.log(err);
            console.log(xhr.status);
        }
    });
});
