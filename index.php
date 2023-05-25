<html dir="ltr" lang="ru" xml:lang="ru" class="yui3-js-enabled">
    <head>
        <title>Учебный портал Алматинского университета энергетики и связи имени Гумарбека Даукеева: Вход на сайт</title>
        <link rel="shortcut icon" href="https://portal.aues.kz/theme/image.php/enlightlite/theme/1665487372/favicon" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="moodle, Учебный портал Алматинского университета энергетики и связи имени Гумарбека Даукеева: Вход на сайт" />
        <link rel="stylesheet" type="text/css" href="https://portal.aues.kz/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" />
        <script charset="utf-8" id="yui_3_17_2_1_1685054488239_8" src="https://portal.aues.kz/theme/yui_combo.php?m/1647316997/core/event/event-min.js&amp;m/1647316997/filter_mathjaxloader/loader/loader-min.js" async=""></script>
        <script
            charset="utf-8"
            id="yui_3_17_2_1_1685054488239_19"
            src="https://portal.aues.kz/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel-min.js&amp;3.17.2/event-resize/event-resize-min.js&amp;3.17.2/event-hover/event-hover-min.js&amp;3.17.2/event-touch/event-touch-min.js&amp;3.17.2/event-move/event-move-min.js&amp;3.17.2/event-flick/event-flick-min.js&amp;3.17.2/event-valuechange/event-valuechange-min.js&amp;3.17.2/event-tap/event-tap-min.js"
            async=""
        ></script>
        <script id="firstthemesheet" type="text/css">
            /** Required in order to fix style inclusion problems in IE with YUI **/
        </script>
        <link rel="stylesheet" type="text/css" href="https://portal.aues.kz/theme/styles.php/enlightlite/1665487372_1/all" />
        <script>
            //<![CDATA[
            var M = {};
            M.yui = {};
            M.pageloadstarttime = new Date();
            M.cfg = {
                wwwroot: "https:\/\/portal.aues.kz",
                sesskey: "fPQdqaKVI6",
                sessiontimeout: "28800",
                themerev: "1665487372",
                slasharguments: 1,
                theme: "enlightlite",
                iconsystemmodule: "core\/icon_system_fontawesome",
                jsrev: "1647316997",
                admin: "admin",
                svgicons: true,
                usertimezone: "\u0410\u0437\u0438\u044f\/\u0410\u043b\u043c\u0430\u0442\u044b",
                contextid: 1,
                langrev: 1684880526,
                templaterev: "1647316997",
            };
            var yui1ConfigFn = function (me) {
                if (/-skin|reset|fonts|grids|base/.test(me.name)) {
                    me.type = "css";
                    me.path = me.path.replace(/\.js/, ".css");
                    me.path = me.path.replace(/\/yui2-skin/, "/assets/skins/sam/yui2-skin");
                }
            };
            var yui2ConfigFn = function (me) {
                var parts = me.name.replace(/^moodle-/, "").split("-"),
                    component = parts.shift(),
                    module = parts[0],
                    min = "-min";
                if (/-(skin|core)$/.test(me.name)) {
                    parts.pop();
                    me.type = "css";
                    min = "";
                }
                if (module) {
                    var filename = parts.join("-");
                    me.path = component + "/" + module + "/" + filename + min + "." + me.type;
                } else {
                    me.path = component + "/" + component + "." + me.type;
                }
            };
            YUI_config = {
                debug: false,
                base: "https:\/\/portal.aues.kz\/lib\/yuilib\/3.17.2\/",
                comboBase: "https:\/\/portal.aues.kz\/theme\/yui_combo.php?",
                combine: true,
                filter: null,
                insertBefore: "firstthemesheet",
                groups: {
                    yui2: {
                        base: "https:\/\/portal.aues.kz\/lib\/yuilib\/2in3\/2.9.0\/build\/",
                        comboBase: "https:\/\/portal.aues.kz\/theme\/yui_combo.php?",
                        combine: true,
                        ext: false,
                        root: "2in3\/2.9.0\/build\/",
                        patterns: { "yui2-": { group: "yui2", configFn: yui1ConfigFn } },
                    },
                    moodle: {
                        name: "moodle",
                        base: "https:\/\/portal.aues.kz\/theme\/yui_combo.php?m\/1647316997\/",
                        combine: true,
                        comboBase: "https:\/\/portal.aues.kz\/theme\/yui_combo.php?",
                        ext: false,
                        root: "m\/1647316997\/",
                        patterns: { "moodle-": { group: "moodle", configFn: yui2ConfigFn } },
                        filter: null,
                        modules: {
                            "moodle-core-actionmenu": { requires: ["base", "event", "node-event-simulate"] },
                            "moodle-core-blocks": { requires: ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification"] },
                            "moodle-core-chooserdialogue": { requires: ["base", "panel", "moodle-core-notification"] },
                            "moodle-core-dragdrop": { requires: ["base", "node", "io", "dom", "dd", "event-key", "event-focus", "moodle-core-notification"] },
                            "moodle-core-event": { requires: ["event-custom"] },
                            "moodle-core-formchangechecker": { requires: ["base", "event-focus", "moodle-core-event"] },
                            "moodle-core-handlebars": { condition: { trigger: "handlebars", when: "after" } },
                            "moodle-core-languninstallconfirm": { requires: ["base", "node", "moodle-core-notification-confirm", "moodle-core-notification-alert"] },
                            "moodle-core-lockscroll": { requires: ["plugin", "base-build"] },
                            "moodle-core-maintenancemodetimer": { requires: ["base", "node"] },
                            "moodle-core-notification": {
                                requires: ["moodle-core-notification-dialogue", "moodle-core-notification-alert", "moodle-core-notification-confirm", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"],
                            },
                            "moodle-core-notification-dialogue": { requires: ["base", "node", "panel", "escape", "event-key", "dd-plugin", "moodle-core-widget-focusafterclose", "moodle-core-lockscroll"] },
                            "moodle-core-notification-alert": { requires: ["moodle-core-notification-dialogue"] },
                            "moodle-core-notification-confirm": { requires: ["moodle-core-notification-dialogue"] },
                            "moodle-core-notification-exception": { requires: ["moodle-core-notification-dialogue"] },
                            "moodle-core-notification-ajaxexception": { requires: ["moodle-core-notification-dialogue"] },
                            "moodle-core-popuphelp": { requires: ["moodle-core-tooltip"] },
                            "moodle-core-tooltip": { requires: ["base", "node", "io-base", "moodle-core-notification-dialogue", "json-parse", "widget-position", "widget-position-align", "event-outside", "cache-base"] },
                            "moodle-core_availability-form": { requires: ["base", "node", "event", "event-delegate", "panel", "moodle-core-notification-dialogue", "json"] },
                            "moodle-backup-backupselectall": { requires: ["node", "event", "node-event-simulate", "anim"] },
                            "moodle-backup-confirmcancel": { requires: ["node", "node-event-simulate", "moodle-core-notification-confirm"] },
                            "moodle-course-categoryexpander": { requires: ["node", "event-key"] },
                            "moodle-course-dragdrop": { requires: ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification", "moodle-course-coursebase", "moodle-course-util"] },
                            "moodle-course-formatchooser": { requires: ["base", "node", "node-event-simulate"] },
                            "moodle-course-management": { requires: ["base", "node", "io-base", "moodle-core-notification-exception", "json-parse", "dd-constrain", "dd-proxy", "dd-drop", "dd-delegate", "node-event-delegate"] },
                            "moodle-course-util": {
                                requires: ["node"],
                                use: ["moodle-course-util-base"],
                                submodules: { "moodle-course-util-base": {}, "moodle-course-util-section": { requires: ["node", "moodle-course-util-base"] }, "moodle-course-util-cm": { requires: ["node", "moodle-course-util-base"] } },
                            },
                            "moodle-form-dateselector": { requires: ["base", "node", "overlay", "calendar"] },
                            "moodle-form-passwordunmask": { requires: [] },
                            "moodle-form-shortforms": { requires: ["node", "base", "selector-css3", "moodle-core-event"] },
                            "moodle-question-chooser": { requires: ["moodle-core-chooserdialogue"] },
                            "moodle-question-preview": { requires: ["base", "dom", "event-delegate", "event-key", "core_question_engine"] },
                            "moodle-question-searchform": { requires: ["base", "node"] },
                            "moodle-availability_completion-form": { requires: ["base", "node", "event", "moodle-core_availability-form"] },
                            "moodle-availability_date-form": { requires: ["base", "node", "event", "io", "moodle-core_availability-form"] },
                            "moodle-availability_grade-form": { requires: ["base", "node", "event", "moodle-core_availability-form"] },
                            "moodle-availability_group-form": { requires: ["base", "node", "event", "moodle-core_availability-form"] },
                            "moodle-availability_grouping-form": { requires: ["base", "node", "event", "moodle-core_availability-form"] },
                            "moodle-availability_profile-form": { requires: ["base", "node", "event", "moodle-core_availability-form"] },
                            "moodle-mod_assign-history": { requires: ["node", "transition"] },
                            "moodle-mod_quiz-autosave": { requires: ["base", "node", "event", "event-valuechange", "node-event-delegate", "io-form"] },
                            "moodle-mod_quiz-dragdrop": {
                                requires: [
                                    "base",
                                    "node",
                                    "io",
                                    "dom",
                                    "dd",
                                    "dd-scroll",
                                    "moodle-core-dragdrop",
                                    "moodle-core-notification",
                                    "moodle-mod_quiz-quizbase",
                                    "moodle-mod_quiz-util-base",
                                    "moodle-mod_quiz-util-page",
                                    "moodle-mod_quiz-util-slot",
                                    "moodle-course-util",
                                ],
                            },
                            "moodle-mod_quiz-modform": { requires: ["base", "node", "event"] },
                            "moodle-mod_quiz-questionchooser": { requires: ["moodle-core-chooserdialogue", "moodle-mod_quiz-util", "querystring-parse"] },
                            "moodle-mod_quiz-quizbase": { requires: ["base", "node"] },
                            "moodle-mod_quiz-toolboxes": { requires: ["base", "node", "event", "event-key", "io", "moodle-mod_quiz-quizbase", "moodle-mod_quiz-util-slot", "moodle-core-notification-ajaxexception"] },
                            "moodle-mod_quiz-util": {
                                requires: ["node", "moodle-core-actionmenu"],
                                use: ["moodle-mod_quiz-util-base"],
                                submodules: {
                                    "moodle-mod_quiz-util-base": {},
                                    "moodle-mod_quiz-util-slot": { requires: ["node", "moodle-mod_quiz-util-base"] },
                                    "moodle-mod_quiz-util-page": { requires: ["node", "moodle-mod_quiz-util-base"] },
                                },
                            },
                            "moodle-message_airnotifier-toolboxes": { requires: ["base", "node", "io"] },
                            "moodle-filter_glossary-autolinker": {
                                requires: [
                                    "base",
                                    "node",
                                    "io-base",
                                    "json-parse",
                                    "event-delegate",
                                    "overlay",
                                    "moodle-core-event",
                                    "moodle-core-notification-alert",
                                    "moodle-core-notification-exception",
                                    "moodle-core-notification-ajaxexception",
                                ],
                            },
                            "moodle-filter_mathjaxloader-loader": { requires: ["moodle-core-event"] },
                            "moodle-editor_atto-editor": {
                                requires: [
                                    "node",
                                    "transition",
                                    "io",
                                    "overlay",
                                    "escape",
                                    "event",
                                    "event-simulate",
                                    "event-custom",
                                    "node-event-html5",
                                    "node-event-simulate",
                                    "yui-throttle",
                                    "moodle-core-notification-dialogue",
                                    "moodle-core-notification-confirm",
                                    "moodle-editor_atto-rangy",
                                    "handlebars",
                                    "timers",
                                    "querystring-stringify",
                                ],
                            },
                            "moodle-editor_atto-plugin": { requires: ["node", "base", "escape", "event", "event-outside", "handlebars", "event-custom", "timers", "moodle-editor_atto-menu"] },
                            "moodle-editor_atto-menu": { requires: ["moodle-core-notification-dialogue", "node", "event", "event-custom"] },
                            "moodle-editor_atto-rangy": { requires: [] },
                            "moodle-report_eventlist-eventfilter": { requires: ["base", "event", "node", "node-event-delegate", "datatable", "autocomplete", "autocomplete-filters"] },
                            "moodle-report_loglive-fetchlogs": { requires: ["base", "event", "node", "io", "node-event-delegate"] },
                            "moodle-gradereport_grader-gradereporttable": { requires: ["base", "node", "event", "handlebars", "overlay", "event-hover"] },
                            "moodle-gradereport_history-userselector": { requires: ["escape", "event-delegate", "event-key", "handlebars", "io-base", "json-parse", "moodle-core-notification-dialogue"] },
                            "moodle-tool_capability-search": { requires: ["base", "node"] },
                            "moodle-tool_lp-dragdrop-reorder": { requires: ["moodle-core-dragdrop"] },
                            "moodle-tool_monitor-dropdown": { requires: ["base", "event", "node"] },
                            "moodle-assignfeedback_editpdf-editor": {
                                requires: [
                                    "base",
                                    "event",
                                    "node",
                                    "io",
                                    "graphics",
                                    "json",
                                    "event-move",
                                    "event-resize",
                                    "transition",
                                    "querystring-stringify-simple",
                                    "moodle-core-notification-dialog",
                                    "moodle-core-notification-alert",
                                    "moodle-core-notification-warning",
                                    "moodle-core-notification-exception",
                                    "moodle-core-notification-ajaxexception",
                                ],
                            },
                            "moodle-atto_accessibilitychecker-button": { requires: ["color-base", "moodle-editor_atto-plugin"] },
                            "moodle-atto_accessibilityhelper-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_align-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_bold-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_charmap-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_clear-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_collapse-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_emojipicker-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_emoticon-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_equation-button": { requires: ["moodle-editor_atto-plugin", "moodle-core-event", "io", "event-valuechange", "tabview", "array-extras"] },
                            "moodle-atto_h5p-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_html-beautify": {},
                            "moodle-atto_html-button": { requires: ["promise", "moodle-editor_atto-plugin", "moodle-atto_html-beautify", "moodle-atto_html-codemirror", "event-valuechange"] },
                            "moodle-atto_html-codemirror": { requires: ["moodle-atto_html-codemirror-skin"] },
                            "moodle-atto_image-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_indent-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_italic-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_link-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_managefiles-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_managefiles-usedfiles": { requires: ["node", "escape"] },
                            "moodle-atto_media-button": { requires: ["moodle-editor_atto-plugin", "moodle-form-shortforms"] },
                            "moodle-atto_noautolink-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_orderedlist-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_recordrtc-button": { requires: ["moodle-editor_atto-plugin", "moodle-atto_recordrtc-recording"] },
                            "moodle-atto_recordrtc-recording": { requires: ["moodle-atto_recordrtc-button"] },
                            "moodle-atto_rtl-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_strike-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_subscript-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_superscript-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_table-button": { requires: ["moodle-editor_atto-plugin", "moodle-editor_atto-menu", "event", "event-valuechange"] },
                            "moodle-atto_title-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_underline-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_undo-button": { requires: ["moodle-editor_atto-plugin"] },
                            "moodle-atto_unorderedlist-button": { requires: ["moodle-editor_atto-plugin"] },
                        },
                    },
                    gallery: {
                        name: "gallery",
                        base: "https:\/\/portal.aues.kz\/lib\/yuilib\/gallery\/",
                        combine: true,
                        comboBase: "https:\/\/portal.aues.kz\/theme\/yui_combo.php?",
                        ext: false,
                        root: "gallery\/1647316997\/",
                        patterns: { "gallery-": { group: "gallery" } },
                    },
                },
                modules: {
                    core_filepicker: {
                        name: "core_filepicker",
                        fullpath: "https:\/\/portal.aues.kz\/lib\/javascript.php\/1647316997\/repository\/filepicker.js",
                        requires: [
                            "base",
                            "node",
                            "node-event-simulate",
                            "json",
                            "async-queue",
                            "io-base",
                            "io-upload-iframe",
                            "io-form",
                            "yui2-treeview",
                            "panel",
                            "cookie",
                            "datatable",
                            "datatable-sort",
                            "resize-plugin",
                            "dd-plugin",
                            "escape",
                            "moodle-core_filepicker",
                            "moodle-core-notification-dialogue",
                        ],
                    },
                    core_comment: { name: "core_comment", fullpath: "https:\/\/portal.aues.kz\/lib\/javascript.php\/1647316997\/comment\/comment.js", requires: ["base", "io-base", "node", "json", "yui2-animation", "overlay", "escape"] },
                    mathjax: { name: "mathjax", fullpath: "https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured" },
                },
            };
            M.yui.loader = { modules: {} };

            //]]>
        </script>

        <meta name="robots" content="noindex" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core/first" src="https://portal.aues.kz/lib/requirejs.php/1647316997/core/first.js"></script>
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({
                config: ["Accessible.js", "Safe.js"],
                errorSettings: { message: ["!"] },
                skipStartupTypeset: true,
                messageStyle: "none"
            });
        </script>
        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="https://portal.aues.kz/lib/javascript.php/1647316997/lib/jquery/jquery-3.4.1.min.js"></script>
    </head>
    <body id="page-login-index" class="format-site pattern-default path-login chrome dir-ltr lang-ru yui-skin-sam yui3-skin-sam portal-aues-kz pagelayout-login course-1 context-1 notloggedin jsenabled">
        <div id="page-wrapper">
            <div>
                <a class="sr-only sr-only-focusable" href="#maincontent">Перейти к основному содержанию</a>
            </div>
            <script src="https://portal.aues.kz/lib/javascript.php/1647316997/lib/babel-polyfill/polyfill.min.js"></script>
            <script src="https://portal.aues.kz/lib/javascript.php/1647316997/lib/polyfills/polyfill.js"></script>
            <script src="https://portal.aues.kz/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script>
            <script src="https://portal.aues.kz/theme/jquery.php/core/jquery-3.4.1.min.js"></script>
            <script src="https://portal.aues.kz/lib/javascript.php/1647316997/lib/javascript-static.js"></script>
            <script>
                //<![CDATA[
                document.body.className += " jsenabled";
                //]]>
            </script>

            <nav role="banner" id="header" class="fixed-top navbar navbar-light bg-faded navbar-expand moodle-has-zindex">
                <div class="container navbar-nav">
                    <div data-region="drawer-toggle" class="d-inline-block mr-3">
                        <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                            <i class="icon fa fa-bars fa-fw" aria-hidden="true"></i><span class="sr-only">Боковая панель</span>
                            <span aria-hidden="true"> </span>
                            <span aria-hidden="true"> </span>
                            <span aria-hidden="true"> </span>
                        </button>

                        <ul class="navbar-nav d-none d-lg-flex">
                            <!-- custom_menu -->
                            <li class="dropdown nav-item">
                                <a
                                    class="dropdown-toggle nav-link"
                                    id="drop-down-646fe416c0267646fe416b36b010"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    href="#"
                                    title="Язык"
                                    aria-controls="drop-down-menu-646fe416c0267646fe416b36b010"
                                >
                                    Русский &lrm;(ru)&lrm;
                                </a>
                                <div class="dropdown-menu" role="menu" id="drop-down-menu-646fe416c0267646fe416b36b010" aria-labelledby="drop-down-646fe416c0267646fe416b36b010">
                                    <a class="dropdown-item" role="menuitem" href="https://portal.aues.kz/login/index.php?lang=kk" title="Қазақша &lrm;(kk)&lrm;">Қазақша &lrm;(kk)&lrm;</a>
                                    <a class="dropdown-item" role="menuitem" href="https://portal.aues.kz/login/index.php?lang=ru" title="Русский &lrm;(ru)&lrm;">Русский &lrm;(ru)&lrm;</a>
                                    <a class="dropdown-item" role="menuitem" href="https://portal.aues.kz/login/index.php?lang=en" title="English &lrm;(en)&lrm;">English &lrm;(en)&lrm;</a>
                                </div>
                            </li>
                            <!-- page_heading_menu -->
                        </ul>
                    </div>

                    <div class="header-top" id="Mainmenu">
                        <ul class="nav navbar-nav ml-auto">
                            <div class="d-none d-lg-flex"></div>
                            <!--<li class="nav-link d-none d-lg-flex" style="color:white; padding-right:20px;">ЦДО 📞+7 727 3231175 вн 6207,6208 </li>-->
                            <!-- navbar_plugin_output -->
                            <li class="nav-item">
                                <a style="float: left; margin-right: 10px;" href="https://apps.apple.com/us/app/auesapp/id6443699021" class="" target="_blank">
                                    <img style="background-color: #fff; max-height: 35px; border-radius: 5px; box-shadow: #000 0px 0px 2px;" src="/intranet/images/mobile_ios_inv.png" />
                                </a>
                            </li>
                            <!-- user_menu -->
                            <li class="nav-item d-flex align-items-center">
                                <div class="usermenu"><span class="login"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="site-header">
                <div class="header-main">
                    <div class="container">
                        <a href="https://portal.aues.kz/?redirect=0" class="navbar-brand has-logo">
                            <span class="logo">
                                <img src="//portal.aues.kz/pluginfile.php/1/theme_enlightlite/logo/1665487372/1604897606__Vc2gb.png" alt="АУЭС" />
                            </span>
                        </a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>

                        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="https://portal.aues.kz/token.php">Электронный деканат</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

            <div id="page" class="container-fluid mt-0">
                <div id="page-content" class="row">
                    <div id="region-main-box" class="col-12">
                        <section id="region-main" class="col-12">
                            <span class="notifications" id="user-notifications"></span>
                            <div role="main">
                                <span id="maincontent"></span>
                                <div class="m-y-3 hidden-sm-down"></div>
                                <div class="row">
                                    <div class="col-xl-6 offset-md-3 offset-sm-2 col-sm-8">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-title text-xs-center">
                                                    <h2></h2>
                                                    <hr />
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 offset-md-1">
                                                        <form class="m-t-1" action="https://portal.aues.kz/login/index.php" method="post" id="login">
                                                            <input id="anchor" type="hidden" name="anchor" value="" />
                                                            <script>
                                                                document.getElementById("anchor").value = location.hash;
                                                            </script>
                                                            <input type="hidden" name="logintoken" value="LPaf9CTkSGA0qRBWys09UOwQrAPE1jCU" />
                                                            <label for="username" class="sr-onl">
                                                                Логин
                                                            </label>
                                                            <input type="text" name="username" id="username" class="form-control" value="" placeholder="Логин" />
                                                            <label for="password" class="sr-onl">Пароль</label>
                                                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Пароль" />

                                                            <div class="rememberpass m-t-1">
                                                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" />
                                                                <label for="rememberusername">Запомнить логин</label>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary btn-block m-t-1" id="loginbtn">Вход</button>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-5 offset-md-1">
                                                        <div class="forgetpass m-t-1">
                                                            <p><a href="https://portal.aues.kz/login/forgot_password.php">Забыли логин или пароль?</a></p>
                                                        </div>

                                                        <div class="m-t-1">
                                                            В Вашем браузере должен быть разрешен прием cookies
                                                            <a
                                                                class="btn btn-link p-0"
                                                                role="button"
                                                                data-container="body"
                                                                data-toggle="popover"
                                                                data-placement="right"
                                                                data-content='<div class="no-overflow"><p>На этом сайте используется два файла cookie:</p>

<p>Строго необходимым является файл cookie для сессий, обычно называемый MoodleSession. Вы должны разрешить использование этого файла cookie в своем браузере, чтобы обеспечить непрерывность при переходах и оставаться в системе при просмотре сайта. Когда вы выходите из системы или закрываете браузер, этот файл cookie уничтожаются (в вашем браузере и на сервере).</p>

<p>Другой файл cookie предназначен исключительно для удобства и обычно называется MOODLEID или аналогично. Он используется для сохранения вашего логина в браузере. Это означает, что когда вы вернетесь на этот сайт, поле логин на странице входа уже будет заполнено. Можно отказаться от использования этого файла cookie, но тогда вам придется каждый раз при открытии сайта вводить свой логин заново.</p>
</div> '
                                                                data-html="true"
                                                                tabindex="0"
                                                                data-trigger="focus"
                                                            >
                                                                <i
                                                                    class="icon fa fa-question-circle text-info fa-fw"
                                                                    title="Справка по использованию элемента «В Вашем браузере должен быть разрешен прием cookies»"
                                                                    aria-label="Справка по использованию элемента «В Вашем браузере должен быть разрешен прием cookies»"
                                                                ></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 offset-md-3 offset-sm-2 col-sm-8">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-title">
                                                    <h2>Вы в первый раз на нашем сайте?</h2>
                                                </div>
                                                <div>
                                                    <p dir="ltr" style="text-align: left;">Как авторизоваться Студентам, ППС и Сотрудникам.&nbsp;</p>
                                                    <div>Логин: логин от корпоративной&nbsp;почты без указания&nbsp;@<a href="http://aues.kz/" target="_blank" rel="noreferrer noopener">aues.kz</a>&nbsp; &nbsp;</div>
                                                    <div>Пароль: от корпоративной почты</div>
                                                    <div><br /></div>
                                                    <div>
                                                        Если вы забыли свой логин, то перейдите по <a href="https://portal.aues.kz/intranet/forgot_login.php" target="_blank" rel="noreferrer noopener">ссылке </a>и сделайте поиск по номеру
                                                        телефона.
                                                    </div>
                                                    <div><br /></div>
                                                    <div>
                                                        Если все равно не можете зайти в Портал тогда пройдите по <a href="http://recovery.aues.kz/new-sbros.php" target="_blank" rel="noreferrer noopener">ссылке</a> и сбросьте пароль от
                                                        корпоративной почты!
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important;" class=""></div>
        <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
            <nav class="list-group" aria-label="">
                <ul>
                    <li>
                        <a
                            class="list-group-item list-group-item-action"
                            href="https://portal.aues.kz/"
                            data-key="home"
                            data-isexpandable="0"
                            data-indent="0"
                            data-showdivider="0"
                            data-type="1"
                            data-nodetype="1"
                            data-collapse="0"
                            data-forceopen="1"
                            data-isactive="0"
                            data-hidden="0"
                            data-preceedwithhr="0"
                        >
                            <div class="ml-0">
                                <div class="media">
                                    <span class="media-left">
                                        <i class="icon fa fa-home fa-fw" aria-hidden="true"></i>
                                    </span>
                                    <span class="media-body">В начало</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <footer id="site-footer">
            <div class="footer-main">
                <div class="bgtrans-overlay"></div>
                <!--Overlay transparent bg layer-->
                <div class="container footer-main-wrap">
                    <div class="row 1">
                        <div class="col-md-3">
                            <h6>О нас</h6>
                            <div class="footer-links">
                                АУЭС&nbsp;— один из немногих ВУЗов в Казахстане, готовящий высококлассных специалистов по энергетике, телекоммуникациям и IT-технологиям во всём регионе Средней Азии. Университет готовит специалистов по
                                специальностям колледжа бакалавриата, магистратуры и докторантуры PhD.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h6>ИНФОРМАЦИЯ ДЛЯ</h6>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="https://aues.edu.kz/ru/site/admissions">ПОСТУПАЮЩИМ</a></li>
                                    <li><a href="https://aues.edu.kz/ru/students">ОБУЧАЮЩИМСЯ</a></li>
                                    <li><a href="https://aues.edu.kz/ru/graduate">ВЫПУСКНИКАМ</a></li>
                                    <li><a href="https://aues.edu.kz/ru/site/on">ДОТ</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h6>QUICK LINKS</h6>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="https://aues.edu.kz/ru/question-answear">Часто задаваемые вопросы</a></li>
                                    <li><a href="https://aues.edu.kz/ru/site/e-university">E_UNIVERSITY</a></li>
                                    <li><a href="https://aues.edu.kz/ru/career">Центр Карьеры Университета</a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h6>СВЯЗАТЬСЯ С НАМИ</h6>
                            <div class="footer-address-block">
                                <div class="footer-address">
                                    <p><i class="fa fa-map-marker"></i>Байтурсынулы 126/1, Алматы, Казахстан</p>
                                </div>
                                <div class="footer-phone">
                                    <p><i class="fa fa-phone-square"></i>Телефон: +7(727)3231175</p>
                                </div>
                                <div class="footer-email">
                                    <p><i class="fa fa-envelope"></i>E-mail: <a href="mailto:aues@aues.kz">aues@aues.kz</a></p>
                                </div>
                            </div>
                            <div class="social-media footer-small-socials">
                                <ul>
                                    <li class="media01" style="background: #e500b8;">
                                        <a href="https://www.instagram.com/aues_university/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="media02" style="background: #4c75a3;">
                                        <a href="https://vk.com/aues_university"><i class="fa fa-vk"></i></a>
                                    </li>
                                    <li class="media03" style="background: #0088cc;">
                                        <a href="https://telegram.me/aues_university"><i class="fa fa-telegram"></i></a>
                                    </li>
                                    <li class="media04" style="background: #4267b2;">
                                        <a href="https://www.facebook.com/aues.university/"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <p>Developed by DIT 2020-2023</p>
                </div>
            </div>
        </footer>
        <!--E.O.Footer-->
        <div class="tool_dataprivacy"><a href="https://portal.aues.kz/admin/tool/dataprivacy/summary.php">Сводка хранения данных</a></div>
        <script>
            //<![CDATA[
            var require = {
                baseUrl: "https://portal.aues.kz/lib/requirejs.php/1647316997/",
                // We only support AMD modules with an explicit define() statement.
                enforceDefine: true,
                skipDataMain: true,
                waitSeconds: 0,

                paths: {
                    jquery: "https://portal.aues.kz/lib/javascript.php/1647316997/lib/jquery/jquery-3.4.1.min",
                    jqueryui: "https://portal.aues.kz/lib/javascript.php/1647316997/lib/jquery/ui-1.12.1/jquery-ui.min",
                    jqueryprivate: "https://portal.aues.kz/lib/javascript.php/1647316997/lib/requirejs/jquery-private",
                },

                // Custom jquery config map.
                map: {
                    // '*' means all modules will get 'jqueryprivate'
                    // for their 'jquery' dependency.
                    "*": { jquery: "jqueryprivate" },
                    // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
                    "*": { process: "core/first" },

                    // 'jquery-private' wants the real jQuery module
                    // though. If this line was not here, there would
                    // be an unresolvable cyclic dependency.
                    jqueryprivate: { jquery: "jquery" },
                },
            };

            //]]>
        </script>
        <script src="https://portal.aues.kz/lib/javascript.php/1647316997/lib/requirejs/require.min.js"></script>
        <script>
            //<![CDATA[
            M.util.js_pending("core/first");
            require(["core/first"], function () {
                require(["core/prefetch"]);
                require(["media_videojs/loader"], function (loader) {
                    loader.setUp(function (videojs) {
                        videojs.options.flash.swf = "https://portal.aues.kz/media/player/videojs/videojs/video-js.swf";
                        videojs.addLanguage("ru", {
                            "Audio Player": "Аудио проигрыватель",
                            "Video Player": "Видео проигрыватель",
                            Play: "Воспроизвести",
                            Pause: "Приостановить",
                            Replay: "Воспроизвести снова",
                            "Current Time": "Текущее время",
                            Duration: "Продолжительность",
                            "Remaining Time": "Оставшееся время",
                            "Stream Type": "Тип потока",
                            LIVE: "ОНЛАЙН",
                            Loaded: "Загрузка",
                            Progress: "Прогресс",
                            "Progress Bar": "Индикатор загрузки",
                            "progress bar timing: currentTime={1} duration={2}": "{1} из {2}",
                            Fullscreen: "Полноэкранный режим",
                            "Non-Fullscreen": "Неполноэкранный режим",
                            Mute: "Без звука",
                            Unmute: "Со звуком",
                            "Playback Rate": "Скорость воспроизведения",
                            Subtitles: "Субтитры",
                            "subtitles off": "Субтитры выкл.",
                            Captions: "Подписи",
                            "captions off": "Подписи выкл.",
                            Chapters: "Главы",
                            Descriptions: "Описания",
                            "descriptions off": "Отключить описания",
                            "Audio Track": "Звуковая дорожка",
                            "Volume Level": "Уровень громкости",
                            "You aborted the media playback": "Вы прервали воспроизведение видео",
                            "A network error caused the media download to fail part-way.": "Ошибка сети вызвала сбой во время загрузки видео.",
                            "The media could not be loaded, either because the server or network failed or because the format is not supported.":
                                "Невозможно загрузить видео из-за сетевого или серверного сбоя либо формат не поддерживается.",
                            "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.":
                                "Воспроизведение видео было приостановлено из-за повреждения либо в связи с тем, что видео использует функции, неподдерживаемые вашим браузером.",
                            "No compatible source was found for this media.": "Совместимые источники для этого видео отсутствуют.",
                            "The media is encrypted and we do not have the keys to decrypt it.": "Видео в зашифрованном виде, и у нас нет ключей для расшифровки.",
                            "Play Video": "Воспроизвести видео",
                            Close: "Закрыть",
                            "Close Modal Dialog": "Закрыть модальное окно",
                            "Modal Window": "Модальное окно",
                            "This is a modal window": "Это модальное окно",
                            "This modal can be closed by pressing the Escape key or activating the close button.": "Модальное окно можно закрыть нажав Esc или кнопку закрытия окна.",
                            ", opens captions settings dialog": ", откроется диалог настройки подписей",
                            ", opens subtitles settings dialog": ", откроется диалог настройки субтитров",
                            ", opens descriptions settings dialog": ", откроется диалог настройки описаний",
                            ", selected": ", выбрано",
                            "captions settings": "настройки подписей",
                            "subtitles settings": "настройки субтитров",
                            "descriptions settings": "настройки описаний",
                            Text: "Текст",
                            White: "Белый",
                            Black: "Черный",
                            Red: "Красный",
                            Green: "Зеленый",
                            Blue: "Синий",
                            Yellow: "Желтый",
                            Magenta: "Пурпурный",
                            Cyan: "Голубой",
                            Background: "Фон",
                            Window: "Окно",
                            Transparent: "Прозрачный",
                            "Semi-Transparent": "Полупрозрачный",
                            Opaque: "Прозрачность",
                            "Font Size": "Размер шрифта",
                            "Text Edge Style": "Стиль края текста",
                            None: "Ничего",
                            Raised: "Поднятый",
                            Depressed: "Пониженный",
                            Uniform: "Одинаковый",
                            Dropshadow: "Тень",
                            "Font Family": "Шрифт",
                            "Proportional Sans-Serif": "Пропорциональный без засечек",
                            "Monospace Sans-Serif": "Моноширинный без засечек",
                            "Proportional Serif": "Пропорциональный с засечками",
                            "Monospace Serif": "Моноширинный с засечками",
                            Casual: "Случайный",
                            Script: "Письменный",
                            "Small Caps": "Малые прописные",
                            Reset: "Сбросить",
                            "restore all settings to the default values": "сбросить все найстройки по умолчанию",
                            Done: "Готово",
                            "Caption Settings Dialog": "Диалог настроек подписи",
                            "Beginning of dialog window. Escape will cancel and close the window.": "Начало диалоговго окна. Кнопка Escape закроет или отменит окно",
                            "End of dialog window.": "Конец диалогового окна.",
                            "{1} is loading.": "{1} загружается.",
                        });
                    });
                });

                require(["jquery", "core/custom_interaction_events"], function ($, CustomEvents) {
                    CustomEvents.define("#single_select646fe416b36b02", [CustomEvents.events.accessibleChange]);
                    $("#single_select646fe416b36b02").on(CustomEvents.events.accessibleChange, function () {
                        var ignore = $(this).find(":selected").attr("data-ignore");
                        if (typeof ignore === typeof undefined) {
                            $("#single_select_f646fe416b36b01").submit();
                        }
                    });
                });
                require(["jquery", "core/custom_interaction_events"], function ($, CustomEvents) {
                    CustomEvents.define("#single_select646fe416b36b04", [CustomEvents.events.accessibleChange]);
                    $("#single_select646fe416b36b04").on(CustomEvents.events.accessibleChange, function () {
                        var ignore = $(this).find(":selected").attr("data-ignore");
                        if (typeof ignore === typeof undefined) {
                            $("#single_select_f646fe416b36b03").submit();
                        }
                    });
                });
                require(["jquery", "core/custom_interaction_events"], function ($, CustomEvents) {
                    CustomEvents.define("#single_select646fe416b36b06", [CustomEvents.events.accessibleChange]);
                    $("#single_select646fe416b36b06").on(CustomEvents.events.accessibleChange, function () {
                        var ignore = $(this).find(":selected").attr("data-ignore");
                        if (typeof ignore === typeof undefined) {
                            $("#single_select_f646fe416b36b05").submit();
                        }
                    });
                });
                require(["jquery", "core/custom_interaction_events"], function ($, CustomEvents) {
                    CustomEvents.define("#single_select646fe416b36b09", [CustomEvents.events.accessibleChange]);
                    $("#single_select646fe416b36b09").on(CustomEvents.events.accessibleChange, function () {
                        var ignore = $(this).find(":selected").attr("data-ignore");
                        if (typeof ignore === typeof undefined) {
                            $("#single_select_f646fe416b36b08").submit();
                        }
                    });
                });
                require(["jquery", "core/custom_interaction_events"], function ($, CustomEvents) {
                    CustomEvents.define("#single_select646fe416b36b012", [CustomEvents.events.accessibleChange]);
                    $("#single_select646fe416b36b012").on(CustomEvents.events.accessibleChange, function () {
                        var ignore = $(this).find(":selected").attr("data-ignore");
                        if (typeof ignore === typeof undefined) {
                            $("#single_select_f646fe416b36b011").submit();
                        }
                    });
                });
                require(["theme_boost/loader"]);
                require(["theme_boost/drawer"], function (mod) {
                    mod.init();
                });
                M.util.js_pending("core/notification");
                require(["core/notification"], function (amd) {
                    amd.init(1, [], false);
                    M.util.js_complete("core/notification");
                });
                M.util.js_pending("core/log");
                require(["core/log"], function (amd) {
                    amd.setConfig({ level: "warn" });
                    M.util.js_complete("core/log");
                });
                M.util.js_pending("core/page_global");
                require(["core/page_global"], function (amd) {
                    amd.init();
                    M.util.js_complete("core/page_global");
                });
                M.util.js_complete("core/first");
            });
            //]]>
        </script>
        <script src="https://portal.aues.kz/theme/javascript.php/enlightlite/1665487372/footer"></script>
        <script>
            //<![CDATA[
            M.str = {
                moodle: {
                    lastmodified: "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0435\u0435 \u0438\u0437\u043c\u0435\u043d\u0435\u043d\u0438\u0435",
                    name: "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435",
                    error: "\u041e\u0448\u0438\u0431\u043a\u0430",
                    info: "\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f",
                    yes: "\u0414\u0430",
                    no: "\u041d\u0435\u0442",
                    cancel: "\u041e\u0442\u043c\u0435\u043d\u0430",
                    confirm: "\u041f\u043e\u0434\u0442\u0432\u0435\u0440\u0434\u0438\u0442\u044c",
                    areyousure: "\u0412\u044b \u0443\u0432\u0435\u0440\u0435\u043d\u044b?",
                    closebuttontitle: "\u0417\u0430\u043a\u0440\u044b\u0442\u044c",
                    unknownerror: "\u041d\u0435\u0438\u0437\u0432\u0435\u0441\u0442\u043d\u0430\u044f \u043e\u0448\u0438\u0431\u043a\u0430",
                    file: "\u0424\u0430\u0439\u043b",
                    url: "URL",
                },
                repository: {
                    type: "\u0422\u0438\u043f",
                    size: "\u0420\u0430\u0437\u043c\u0435\u0440",
                    invalidjson: "\u041d\u0435\u0432\u0435\u0440\u043d\u0430\u044f \u0441\u0442\u0440\u043e\u043a\u0430 JSON",
                    nofilesattached: "\u041d\u0435 \u043f\u0440\u0438\u043a\u0440\u0435\u043f\u043b\u0435\u043d \u043d\u0438 \u043e\u0434\u0438\u043d \u0444\u0430\u0439\u043b",
                    filepicker: "\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430",
                    logout: "\u0412\u044b\u0445\u043e\u0434",
                    nofilesavailable: "\u041d\u0435\u0442 \u043d\u0438 \u043e\u0434\u043d\u043e\u0433\u043e \u0444\u0430\u0439\u043b\u0430",
                    norepositoriesavailable:
                        "\u041a \u0441\u043e\u0436\u0430\u043b\u0435\u043d\u0438\u044e, \u043d\u0438 \u043e\u0434\u043d\u043e \u0438\u0437 \u0412\u0430\u0448\u0438\u0445 \u0442\u0435\u043a\u0443\u0449\u0438\u0445 \u0445\u0440\u0430\u043d\u0438\u043b\u0438\u0449 \u0444\u0430\u0439\u043b\u043e\u0432 \u043d\u0435 \u043c\u043e\u0436\u0435\u0442 \u0432\u0435\u0440\u043d\u0443\u0442\u044c \u0444\u0430\u0439\u043b\u044b \u0432 \u0437\u0430\u043f\u0440\u0430\u0448\u0438\u0432\u0430\u0435\u043c\u043e\u043c \u0444\u043e\u0440\u043c\u0430\u0442\u0435.",
                    fileexistsdialogheader: "\u0424\u0430\u0439\u043b \u0441\u043e\u0437\u0434\u0430\u043d",
                    fileexistsdialog_editor:
                        "\u0424\u0430\u0439\u043b \u0441 \u044d\u0442\u0438\u043c \u0438\u043c\u0435\u043d\u0435\u043c \u0443\u0436\u0435 \u0431\u044b\u043b \u043f\u0440\u0438\u043a\u0440\u0435\u043f\u043b\u0435\u043d \u043a \u0440\u0435\u0434\u0430\u043a\u0442\u0438\u0440\u0443\u0435\u043c\u043e\u043c\u0443 \u0442\u0435\u043a\u0441\u0442\u0443",
                    fileexistsdialog_filemanager:
                        "\u0424\u0430\u0439\u043b \u0441 \u044d\u0442\u0438\u043c \u0438\u043c\u0435\u043d\u0435\u043c \u0443\u0436\u0435 \u0431\u044b\u043b \u043f\u0440\u0438\u043a\u0440\u0435\u043f\u043b\u0435\u043d",
                    renameto: "\u041f\u0435\u0440\u0435\u0438\u043c\u0435\u043d\u043e\u0432\u0430\u0442\u044c \u0432 \u00ab{$a}\u00bb",
                    referencesexist: "\u041d\u0430 \u044d\u0442\u043e\u0442 \u0444\u0430\u0439\u043b \u0435\u0441\u0442\u044c \u0441\u0441\u044b\u043b\u043a\u0438: {$a}",
                    select: "\u0412\u044b\u0431\u0440\u0430\u0442\u044c",
                },
                admin: {
                    confirmdeletecomments:
                        "\u0412\u044b \u0443\u0432\u0435\u0440\u0435\u043d\u044b \u0432 \u0442\u043e\u043c, \u0447\u0442\u043e \u0441\u043e\u0431\u0438\u0440\u0430\u0435\u0442\u0435\u0441\u044c \u0443\u0434\u0430\u043b\u0438\u0442\u044c \u043a\u043e\u043c\u043c\u0435\u043d\u0442\u0430\u0440\u0438\u0438?",
                    confirmation: "\u041f\u043e\u0434\u0442\u0432\u0435\u0440\u0436\u0434\u0435\u043d\u0438\u0435",
                },
                debug: {
                    debuginfo: "\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f \u043e\u0431 \u043e\u0442\u043b\u0430\u0434\u043a\u0435",
                    line: "\u0421\u0442\u0440\u043e\u043a\u0430",
                    stacktrace: "\u0422\u0440\u0430\u0441\u0441\u0438\u0440\u043e\u0432\u043a\u0438 \u0441\u0442\u0435\u043a\u0430",
                },
                langconfig: { labelsep: ":" },
            };
            //]]>
        </script>
        <script>
            //<![CDATA[
            (function () {
                Y.use("moodle-filter_mathjaxloader-loader", function () {
                    M.filter_mathjaxloader.configure({
                        mathjaxconfig: '\nMathJax.Hub.Config({\n    config: ["Accessible.js", "Safe.js"],\n    errorSettings: { message: ["!"] },\n    skipStartupTypeset: true,\n    messageStyle: "none"\n});\n',
                        lang: "ru",
                    });
                });
                M.util.help_popups.setup(Y);
                M.util.js_pending("random646fe416b36b013");
                Y.on("domready", function () {
                    M.util.js_complete("init");
                    M.util.js_complete("random646fe416b36b013");
                });
            })();
            //]]>
        </script>
        <link rel="stylesheet" type="text/css" href="/theme/enlightlite/style/theme.css" />

        <div style="position: absolute; display: none; z-index: 16777271;"></div>
    </body>
</html>
