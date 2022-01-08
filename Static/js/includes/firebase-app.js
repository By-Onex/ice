var firebase = function (e) {
    function t(r) {
        if (n[r])return n[r].exports;
        var i = n[r] = {i: r, l: !1, exports: {}};
        return e[r].call(i.exports, i, i.exports, t), i.l = !0, i.exports
    }

    var n = {};
    return t.m = e, t.c = n, t.i = function (e) {
        return e
    }, t.d = function (e, n, r) {
        t.o(e, n) || Object.defineProperty(e, n, {configurable: !1, enumerable: !0, get: r})
    }, t.n = function (e) {
        var n = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
        return t.d(n, "a", n), n
    }, t.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 11)
}([function (e, t, n) {
    "use strict";
    (function (e) {
        Object.defineProperty(t, "__esModule", {value: !0});
        var r = void 0;
        if (void 0 !== e) r = e; else if ("undefined" != typeof self) r = self; else try {
            r = Function("return this")()
        } catch (e) {
            throw new Error("polyfill failed because global object is unavailable in this environment")
        }
        var i = r.Promise || n(8);
        t.local = {Promise: i, GoogPromise: i}
    }).call(t, n(1))
}, function (e, t) {
    var n;
    n = function () {
        return this
    }();
    try {
        n = n || Function("return this")() || (0, eval)("this")
    } catch (e) {
        "object" == typeof window && (n = window)
    }
    e.exports = n
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = n(5), i = (0, r.createFirebaseNamespace)();
    t.default = i, e.exports = t.default
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return i(void 0, e)
    }

    function i(e, t) {
        if (!(t instanceof Object))return t;
        switch (t.constructor) {
            case Date:
                return new Date(t.getTime());
            case Object:
                void 0 === e && (e = {});
                break;
            case Array:
                e = [];
                break;
            default:
                return t
        }
        for (var n in t)t.hasOwnProperty(n) && (e[n] = i(e[n], t[n]));
        return e
    }

    function o(e, t, n) {
        e[t] = n
    }

    Object.defineProperty(t, "__esModule", {value: !0}), t.deepCopy = r, t.deepExtend = i, t.patchProperty = o
}, function (e, t, n) {
    "use strict";
    function r(e, t) {
        if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
    }

    function i(e) {
        var t = a;
        return a = e, t
    }

    Object.defineProperty(t, "__esModule", {value: !0});
    var o = function () {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }

        return function (t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t
        }
    }();
    t.patchCapture = i;
    var a = Error.captureStackTrace, c = function e(t, n) {
        if (r(this, e), this.code = t, this.message = n, a) a(this, s.prototype.create); else {
            var i = Error.apply(this, arguments);
            this.name = "FirebaseError", Object.defineProperty(this, "stack", {
                get: function () {
                    return i.stack
                }
            })
        }
    };
    c.prototype = Object.create(Error.prototype), c.prototype.constructor = c, c.prototype.name = "FirebaseError";
    var s = t.ErrorFactory = function () {
        function e(t, n, i) {
            r(this, e), this.service = t, this.serviceName = n, this.errors = i, this.pattern = /\{\$([^}]+)}/g
        }

        return o(e, [{
            key: "create", value: function (e, t) {
                void 0 === t && (t = {});
                var n = this.errors[e], r = this.service + "/" + e, i = void 0;
                i = void 0 === n ? "Error" : n.replace(this.pattern, function (e, n) {
                        var r = t[n];
                        return void 0 !== r ? r.toString() : "<" + n + "?>"
                    }), i = this.serviceName + ": " + i + " (" + r + ").";
                var o = new c(r, i);
                for (var a in t)t.hasOwnProperty(a) && "_" !== a.slice(-1) && (o[a] = t[a]);
                return o
            }
        }]), e
    }()
}, function (e, t, n) {
    "use strict";
    function r(e, t) {
        if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
    }

    function i() {
        function e(e) {
            e = e || d;
            var t = r[e];
            return void 0 === t && o("no-app", {name: e}), t
        }

        function t(e, t) {
            Object.keys(a).forEach(function (r) {
                var i = n(e, r);
                null !== i && h[i] && h[i](t, e)
            })
        }

        function n(e, t) {
            if ("serverAuth" === t)return null;
            var n = t, r = e.options;
            return "auth" === t && (r.serviceAccount || r.credential) && (n = "serverAuth", "serverAuth" in a || o("sa-not-supported")), n
        }

        var r = {}, a = {}, h = {}, v = {
            __esModule: !0, initializeApp: function (e, n) {
                void 0 === n ? n = d : "string" == typeof n && "" !== n || o("bad-app-name", {name: n + ""}), void 0 !== r[n] && o("duplicate-app", {name: n});
                var i = new p(e, n, v);
                return r[n] = i, t(i, "create"), void 0 != i.INTERNAL && void 0 != i.INTERNAL.getToken || (0, c.deepExtend)(i, {
                    INTERNAL: {
                        getUid: function () {
                            return null
                        }, getToken: function () {
                            return l.resolve(null)
                        }, addAuthTokenListener: function () {
                        }, removeAuthTokenListener: function () {
                        }
                    }
                }), i
            }, app: e, apps: null, Promise: l, SDK_VERSION: "3.9.0", INTERNAL: {
                registerService: function (t, n, r, i, s) {
                    a[t] && o("duplicate-service", {name: t}), a[t] = s ? n : function (e, t) {
                            return n(e, t, d)
                        }, i && (h[t] = i);
                    var u = void 0;
                    return u = function (n) {
                        return void 0 === n && (n = e()), "function" != typeof n[t] && o("invalid-app-argument", {name: t}), n[t]()
                    }, void 0 !== r && (0, c.deepExtend)(u, r), v[t] = u, u
                }, createFirebaseNamespace: i, extendNamespace: function (e) {
                    (0, c.deepExtend)(v, e)
                }, createSubscribe: s.createSubscribe, ErrorFactory: u.ErrorFactory, removeApp: function (e) {
                    t(r[e], "delete"), delete r[e]
                }, factories: a, useAsService: n, Promise: f.local.GoogPromise, deepExtend: c.deepExtend
            }
        };
        return (0, c.patchProperty)(v, "default", v), Object.defineProperty(v, "apps", {
            get: function () {
                return Object.keys(r).map(function (e) {
                    return r[e]
                })
            }
        }), (0, c.patchProperty)(e, "App", p), v
    }

    function o(e, t) {
        throw v.create(e, t)
    }

    Object.defineProperty(t, "__esModule", {value: !0});
    var a = function () {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }

        return function (t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t
        }
    }();
    t.createFirebaseNamespace = i;
    var c = n(3), s = n(6), u = n(4), f = n(0), l = f.local.Promise, d = "[DEFAULT]", p = function () {
        function e(t, n, i) {
            var o = this;
            r(this, e), this.firebase_ = i, this.isDeleted_ = !1, this.services_ = {}, this.name_ = n, this.options_ = (0, c.deepCopy)(t);
            var a = "credential" in this.options_, s = "serviceAccount" in this.options_;
            if (a || s) {
                var u = s ? "serviceAccount" : "credential";
                "undefined" != typeof console && console.log("The '" + u + "' property specified in the first argument to initializeApp() is deprecated and will be removed in the next major version. You should instead use the 'firebase-admin' package. See https://firebase.google.com/docs/admin/setup for details on how to get started.")
            }
            Object.keys(i.INTERNAL.factories).forEach(function (e) {
                var t = i.INTERNAL.useAsService(o, e);
                if (null !== t) {
                    var n = o.getService.bind(o, t);
                    (0, c.patchProperty)(o, e, n)
                }
            })
        }

        return a(e, [{
            key: "delete", value: function () {
                var e = this;
                return new l(function (t) {
                    e.checkDestroyed_(), t()
                }).then(function () {
                    e.firebase_.INTERNAL.removeApp(e.name_);
                    var t = [];
                    return Object.keys(e.services_).forEach(function (n) {
                        Object.keys(e.services_[n]).forEach(function (r) {
                            t.push(e.services_[n][r])
                        })
                    }), l.all(t.map(function (e) {
                        return e.INTERNAL.delete()
                    }))
                }).then(function () {
                    e.isDeleted_ = !0, e.services_ = {}
                })
            }
        }, {
            key: "getService", value: function (e, t) {
                this.checkDestroyed_(), void 0 === this.services_[e] && (this.services_[e] = {});
                var n = t || d;
                if (void 0 === this.services_[e][n]) {
                    var r = this.firebase_.INTERNAL.factories[e](this, this.extendApp.bind(this), t);
                    return this.services_[e][n] = r, r
                }
                return this.services_[e][n]
            }
        }, {
            key: "extendApp", value: function (e) {
                (0, c.deepExtend)(this, e)
            }
        }, {
            key: "checkDestroyed_", value: function () {
                this.isDeleted_ && o("app-deleted", {name: this.name_})
            }
        }, {
            key: "name", get: function () {
                return this.checkDestroyed_(), this.name_
            }
        }, {
            key: "options", get: function () {
                return this.checkDestroyed_(), this.options_
            }
        }]), e
    }();
    p.prototype.name && p.prototype.options || p.prototype.delete || console.log("dc");
    var h = {
        "no-app": "No Firebase App '{$name}' has been created - call Firebase App.initializeApp()",
        "bad-app-name": "Illegal App name: '{$name}",
        "duplicate-app": "Firebase App named '{$name}' already exists",
        "app-deleted": "Firebase App named '{$name}' already deleted",
        "duplicate-service": "Firebase service named '{$name}' already registered",
        "sa-not-supported": "Initializing the Firebase SDK with a service account is only allowed in a Node.js environment. On client devices, you should instead initialize the SDK with an api key and auth domain",
        "invalid-app-argument": "firebase.{$name}() takes either no argument or a Firebase App instance."
    }, v = new u.ErrorFactory("app", "Firebase", h)
}, function (e, t, n) {
    "use strict";
    function r(e, t) {
        if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
    }

    function i(e, t) {
        var n = new d(e, t);
        return n.subscribe.bind(n)
    }

    function o(e, t) {
        return function () {
            for (var n = arguments.length, r = Array(n), i = 0; i < n; i++)r[i] = arguments[i];
            l.resolve(!0).then(function () {
                e.apply(void 0, r)
            }).catch(function (e) {
                t && t(e)
            })
        }
    }

    function a(e, t) {
        if ("object" !== (void 0 === e ? "undefined" : s(e)) || null === e)return !1;
        var n = !0, r = !1, i = void 0;
        try {
            for (var o, a = t[Symbol.iterator](); !(n = (o = a.next()).done); n = !0) {
                var c = o.value;
                if (c in e && "function" == typeof e[c])return !0
            }
        } catch (e) {
            r = !0, i = e
        } finally {
            try {
                !n && a.return && a.return()
            } finally {
                if (r)throw i
            }
        }
        return !1
    }

    function c() {
    }

    Object.defineProperty(t, "__esModule", {value: !0});
    var s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, u = function () {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }

        return function (t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t
        }
    }();
    t.createSubscribe = i, t.async = o;
    var f = n(0), l = f.local.Promise, d = function () {
        function e(t, n) {
            var i = this;
            r(this, e), this.observers = [], this.unsubscribes = [], this.observerCount = 0, this.task = l.resolve(), this.finalized = !1, this.onNoObservers = n, this.task.then(function () {
                t(i)
            }).catch(function (e) {
                i.error(e)
            })
        }

        return u(e, [{
            key: "next", value: function (e) {
                this.forEachObserver(function (t) {
                    t.next(e)
                })
            }
        }, {
            key: "error", value: function (e) {
                this.forEachObserver(function (t) {
                    t.error(e)
                }), this.close(e)
            }
        }, {
            key: "complete", value: function () {
                this.forEachObserver(function (e) {
                    e.complete()
                }), this.close()
            }
        }, {
            key: "subscribe", value: function (e, t, n) {
                var r = this, i = void 0;
                if (void 0 === e && void 0 === t && void 0 === n)throw new Error("Missing Observer.");
                i = a(e, ["next", "error", "complete"]) ? e : {
                        next: e,
                        error: t,
                        complete: n
                    }, void 0 === i.next && (i.next = c), void 0 === i.error && (i.error = c), void 0 === i.complete && (i.complete = c);
                var o = this.unsubscribeOne.bind(this, this.observers.length);
                return this.finalized && this.task.then(function () {
                    try {
                        r.finalError ? i.error(r.finalError) : i.complete()
                    } catch (e) {
                    }
                }), this.observers.push(i), o
            }
        }, {
            key: "unsubscribeOne", value: function (e) {
                void 0 !== this.observers && void 0 !== this.observers[e] && (delete this.observers[e], this.observerCount -= 1, 0 === this.observerCount && void 0 !== this.onNoObservers && this.onNoObservers(this))
            }
        }, {
            key: "forEachObserver", value: function (e) {
                if (!this.finalized)for (var t = 0; t < this.observers.length; t++)this.sendOne(t, e)
            }
        }, {
            key: "sendOne", value: function (e, t) {
                var n = this;
                this.task.then(function () {
                    if (void 0 !== n.observers && void 0 !== n.observers[e])try {
                        t(n.observers[e])
                    } catch (e) {
                        "undefined" != typeof console && console.error && console.error(e)
                    }
                })
            }
        }, {
            key: "close", value: function (e) {
                var t = this;
                this.finalized || (this.finalized = !0, void 0 !== e && (this.finalError = e), this.task.then(function () {
                    t.observers = void 0, t.onNoObservers = void 0
                }))
            }
        }]), e
    }()
}, function (e, t) {
    function n() {
        throw new Error("setTimeout has not been defined")
    }

    function r() {
        throw new Error("clearTimeout has not been defined")
    }

    function i(e) {
        if (f === setTimeout)return setTimeout(e, 0);
        if ((f === n || !f) && setTimeout)return f = setTimeout, setTimeout(e, 0);
        try {
            return f(e, 0)
        } catch (t) {
            try {
                return f.call(null, e, 0)
            } catch (t) {
                return f.call(this, e, 0)
            }
        }
    }

    function o(e) {
        if (l === clearTimeout)return clearTimeout(e);
        if ((l === r || !l) && clearTimeout)return l = clearTimeout, clearTimeout(e);
        try {
            return l(e)
        } catch (t) {
            try {
                return l.call(null, e)
            } catch (t) {
                return l.call(this, e)
            }
        }
    }

    function a() {
        v && p && (v = !1, p.length ? h = p.concat(h) : m = -1, h.length && c())
    }

    function c() {
        if (!v) {
            var e = i(a);
            v = !0;
            for (var t = h.length; t;) {
                for (p = h, h = []; ++m < t;)p && p[m].run();
                m = -1, t = h.length
            }
            p = null, v = !1, o(e)
        }
    }

    function s(e, t) {
        this.fun = e, this.array = t
    }

    function u() {
    }

    var f, l, d = e.exports = {};
    !function () {
        try {
            f = "function" == typeof setTimeout ? setTimeout : n
        } catch (e) {
            f = n
        }
        try {
            l = "function" == typeof clearTimeout ? clearTimeout : r
        } catch (e) {
            l = r
        }
    }();
    var p, h = [], v = !1, m = -1;
    d.nextTick = function (e) {
        var t = new Array(arguments.length - 1);
        if (arguments.length > 1)for (var n = 1; n < arguments.length; n++)t[n - 1] = arguments[n];
        h.push(new s(e, t)), 1 !== h.length || v || i(c)
    }, s.prototype.run = function () {
        this.fun.apply(null, this.array)
    }, d.title = "browser", d.browser = !0, d.env = {}, d.argv = [], d.version = "", d.versions = {}, d.on = u, d.addListener = u, d.once = u, d.off = u, d.removeListener = u, d.removeAllListeners = u, d.emit = u, d.binding = function (e) {
        throw new Error("process.binding is not supported")
    }, d.cwd = function () {
        return "/"
    }, d.chdir = function (e) {
        throw new Error("process.chdir is not supported")
    }, d.umask = function () {
        return 0
    }
}, function (e, t, n) {
    (function (t) {
        !function (n) {
            function r() {
            }

            function i(e, t) {
                return function () {
                    e.apply(t, arguments)
                }
            }

            function o(e) {
                if ("object" != typeof this)throw new TypeError("Promises must be constructed via new");
                if ("function" != typeof e)throw new TypeError("not a function");
                this._state = 0, this._handled = !1, this._value = void 0, this._deferreds = [], l(e, this)
            }

            function a(e, t) {
                for (; 3 === e._state;)e = e._value;
                if (0 === e._state)return void e._deferreds.push(t);
                e._handled = !0, o._immediateFn(function () {
                    var n = 1 === e._state ? t.onFulfilled : t.onRejected;
                    if (null === n)return void(1 === e._state ? c : s)(t.promise, e._value);
                    var r;
                    try {
                        r = n(e._value)
                    } catch (e) {
                        return void s(t.promise, e)
                    }
                    c(t.promise, r)
                })
            }

            function c(e, t) {
                try {
                    if (t === e)throw new TypeError("A promise cannot be resolved with itself.");
                    if (t && ("object" == typeof t || "function" == typeof t)) {
                        var n = t.then;
                        if (t instanceof o)return e._state = 3, e._value = t, void u(e);
                        if ("function" == typeof n)return void l(i(n, t), e)
                    }
                    e._state = 1, e._value = t, u(e)
                } catch (t) {
                    s(e, t)
                }
            }

            function s(e, t) {
                e._state = 2, e._value = t, u(e)
            }

            function u(e) {
                2 === e._state && 0 === e._deferreds.length && o._immediateFn(function () {
                    e._handled || o._unhandledRejectionFn(e._value)
                });
                for (var t = 0, n = e._deferreds.length; t < n; t++)a(e, e._deferreds[t]);
                e._deferreds = null
            }

            function f(e, t, n) {
                this.onFulfilled = "function" == typeof e ? e : null, this.onRejected = "function" == typeof t ? t : null, this.promise = n
            }

            function l(e, t) {
                var n = !1;
                try {
                    e(function (e) {
                        n || (n = !0, c(t, e))
                    }, function (e) {
                        n || (n = !0, s(t, e))
                    })
                } catch (e) {
                    if (n)return;
                    n = !0, s(t, e)
                }
            }

            var d = setTimeout;
            o.prototype.catch = function (e) {
                return this.then(null, e)
            }, o.prototype.then = function (e, t) {
                var n = new this.constructor(r);
                return a(this, new f(e, t, n)), n
            }, o.all = function (e) {
                var t = Array.prototype.slice.call(e);
                return new o(function (e, n) {
                    function r(o, a) {
                        try {
                            if (a && ("object" == typeof a || "function" == typeof a)) {
                                var c = a.then;
                                if ("function" == typeof c)return void c.call(a, function (e) {
                                    r(o, e)
                                }, n)
                            }
                            t[o] = a, 0 == --i && e(t)
                        } catch (e) {
                            n(e)
                        }
                    }

                    if (0 === t.length)return e([]);
                    for (var i = t.length, o = 0; o < t.length; o++)r(o, t[o])
                })
            }, o.resolve = function (e) {
                return e && "object" == typeof e && e.constructor === o ? e : new o(function (t) {
                        t(e)
                    })
            }, o.reject = function (e) {
                return new o(function (t, n) {
                    n(e)
                })
            }, o.race = function (e) {
                return new o(function (t, n) {
                    for (var r = 0, i = e.length; r < i; r++)e[r].then(t, n)
                })
            }, o._immediateFn = "function" == typeof t && function (e) {
                    t(e)
                } || function (e) {
                    d(e, 0)
                }, o._unhandledRejectionFn = function (e) {
                "undefined" != typeof console && console && console.warn("Possible Unhandled Promise Rejection:", e)
            }, o._setImmediateFn = function (e) {
                o._immediateFn = e
            }, o._setUnhandledRejectionFn = function (e) {
                o._unhandledRejectionFn = e
            }, void 0 !== e && e.exports ? e.exports = o : n.Promise || (n.Promise = o)
        }(this)
    }).call(t, n(10).setImmediate)
}, function (e, t, n) {
    (function (e, t) {
        !function (e, n) {
            "use strict";
            function r(e) {
                "function" != typeof e && (e = new Function("" + e));
                for (var t = new Array(arguments.length - 1), n = 0; n < t.length; n++)t[n] = arguments[n + 1];
                var r = {callback: e, args: t};
                return u[s] = r, c(s), s++
            }

            function i(e) {
                delete u[e]
            }

            function o(e) {
                var t = e.callback, r = e.args;
                switch (r.length) {
                    case 0:
                        t();
                        break;
                    case 1:
                        t(r[0]);
                        break;
                    case 2:
                        t(r[0], r[1]);
                        break;
                    case 3:
                        t(r[0], r[1], r[2]);
                        break;
                    default:
                        t.apply(n, r)
                }
            }

            function a(e) {
                if (f) setTimeout(a, 0, e); else {
                    var t = u[e];
                    if (t) {
                        f = !0;
                        try {
                            o(t)
                        } finally {
                            i(e), f = !1
                        }
                    }
                }
            }

            if (!e.setImmediate) {
                var c, s = 1, u = {}, f = !1, l = e.document, d = Object.getPrototypeOf && Object.getPrototypeOf(e);
                d = d && d.setTimeout ? d : e, "[object process]" === {}.toString.call(e.process) ? function () {
                        c = function (e) {
                            t.nextTick(function () {
                                a(e)
                            })
                        }
                    }() : function () {
                        if (e.postMessage && !e.importScripts) {
                            var t = !0, n = e.onmessage;
                            return e.onmessage = function () {
                                t = !1
                            }, e.postMessage("", "*"), e.onmessage = n, t
                        }
                    }() ? function () {
                            var t = "setImmediate$" + Math.random() + "$", n = function (n) {
                                n.source === e && "string" == typeof n.data && 0 === n.data.indexOf(t) && a(+n.data.slice(t.length))
                            };
                            e.addEventListener ? e.addEventListener("message", n, !1) : e.attachEvent("onmessage", n), c = function (n) {
                                e.postMessage(t + n, "*")
                            }
                        }() : e.MessageChannel ? function () {
                                var e = new MessageChannel;
                                e.port1.onmessage = function (e) {
                                    a(e.data)
                                }, c = function (t) {
                                    e.port2.postMessage(t)
                                }
                            }() : l && "onreadystatechange" in l.createElement("script") ? function () {
                                    var e = l.documentElement;
                                    c = function (t) {
                                        var n = l.createElement("script");
                                        n.onreadystatechange = function () {
                                            a(t), n.onreadystatechange = null, e.removeChild(n), n = null
                                        }, e.appendChild(n)
                                    }
                                }() : function () {
                                    c = function (e) {
                                        setTimeout(a, 0, e)
                                    }
                                }(), d.setImmediate = r, d.clearImmediate = i
            }
        }("undefined" == typeof self ? void 0 === e ? this : e : self)
    }).call(t, n(1), n(7))
}, function (e, t, n) {
    function r(e, t) {
        this._id = e, this._clearFn = t
    }

    var i = Function.prototype.apply;
    t.setTimeout = function () {
        return new r(i.call(setTimeout, window, arguments), clearTimeout)
    }, t.setInterval = function () {
        return new r(i.call(setInterval, window, arguments), clearInterval)
    }, t.clearTimeout = t.clearInterval = function (e) {
        e && e.close()
    }, r.prototype.unref = r.prototype.ref = function () {
    }, r.prototype.close = function () {
        this._clearFn.call(window, this._id)
    }, t.enroll = function (e, t) {
        clearTimeout(e._idleTimeoutId), e._idleTimeout = t
    }, t.unenroll = function (e) {
        clearTimeout(e._idleTimeoutId), e._idleTimeout = -1
    }, t._unrefActive = t.active = function (e) {
        clearTimeout(e._idleTimeoutId);
        var t = e._idleTimeout;
        t >= 0 && (e._idleTimeoutId = setTimeout(function () {
            e._onTimeout && e._onTimeout()
        }, t))
    }, n(9), t.setImmediate = setImmediate, t.clearImmediate = clearImmediate
}, function (e, t, n) {
    e.exports = n(2)
}]);
//# sourceMappingURL=firebase-app.js.map