function _typeof(e) { return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) { return typeof e } : function(e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e })(e) }! function(e) { var o, t; "function" == typeof define && define.amd ? define(e) : "object" == ("undefined" == typeof exports ? "undefined" : _typeof(exports)) ? module.exports = e() : (o = window.Cookies, (t = window.Cookies = e()).noConflict = function() { return window.Cookies = o, t }) }(function() {
    function l() { for (var e = 0, o = {}; e < arguments.length; e++) { var t, n = arguments[e]; for (t in n) o[t] = n[t] } return o }
    return function e(a) {
        function d(e, o, t) {
            var n, r;
            if (1 < arguments.length) { "number" == typeof(t = l({ path: "/" }, d.defaults, t)).expires && ((r = new Date).setMilliseconds(r.getMilliseconds() + 864e5 * t.expires), t.expires = r); try { n = JSON.stringify(o), /^[\{\[]/.test(n) && (o = n) } catch (e) {} return o = a.write ? a.write(o, e) : encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), e = (e = (e = encodeURIComponent(String(e))).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)).replace(/[\(\)]/g, escape), document.cookie = [e, "=", o, t.expires && "; expires=" + t.expires.toUTCString(), t.path && "; path=" + t.path, t.domain && "; domain=" + t.domain, t.secure ? "; secure" : ""].join("") }
            e || (n = {});
            for (var i = document.cookie ? document.cookie.split("; ") : [], c = /(%[0-9A-Z]{2})+/g, p = 0; p < i.length; p++) {
                var f = i[p].split("="),
                    s = f[0].replace(c, decodeURIComponent),
                    u = f.slice(1).join("=");
                '"' === u.charAt(0) && (u = u.slice(1, -1));
                try {
                    if (u = a.read ? a.read(u, s) : a(u, s) || u.replace(c, decodeURIComponent), this.json) try { u = JSON.parse(u) } catch (e) {}
                    if (e === s) { n = u; break }
                    e || (n[s] = u)
                } catch (e) {}
            }
            return n
        }
        return (d.get = d.set = d).getJSON = function() { return d.apply({ json: !0 }, [].slice.call(arguments)) }, d.defaults = {}, d.remove = function(e, o) { d(e, "", l(o, { expires: -1 })) }, d.withConverter = e, d
    }(function() {})
});