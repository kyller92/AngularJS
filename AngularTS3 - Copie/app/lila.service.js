/**
 * Created by Path� on 05/06/2016.
 */
System.register([], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var lilaservice;
    return {
        setters:[],
        execute: function() {
            lilaservice = (function () {
                function lilaservice(http) {
                    this._http = null;
                    this._http = http;
                }
                lilaservice.prototype.getlilas = function () {
                    return Promise.resolve(LILAS);
                };
                return lilaservice;
            }());
            exports_1("lilaservice", lilaservice);
        }
    }
});
//# sourceMappingURL=lila.service.js.map