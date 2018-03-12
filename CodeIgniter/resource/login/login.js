(function ($) {
    "use strict";
    window.coverBrowser = window.coverBrowser || {};
    var self = window.coverBrowser;

    self.state = (function () {
        var activeIndex = 0,
            stageDim = {},
            coverDim = {};

        return {
            activeIndex: activeIndex
        };
    })();

    self.actions = (function () {
        var doMove = function () {
                var activeIndex = self.state.activeIndex,
                    $covers = $(".cbImage"),
                    newActive, oldActive = $(".cbImage .active");

                $covers.each(function (i, e) {
                    if (i < activeIndex) {
                        this.className = "cbImage inactiveLeft inactiveLeft" + (activeIndex - i);
                    }
                    else if (i === activeIndex) {
                        this.className = "cbImage active";
                        newActive = this;
                    }
                    else if (i > activeIndex) {
                        this.className = "cbImage inactiveRight inactiveRight" + ((activeIndex - i) * -1);
                    }
                });

                $(document).trigger("endmove.cvr", [{"newActive": newActive, "oldActive": oldActive}]);
            },

            moveRight = function () {
                if ($(document).trigger("startmoveright") !== false) {
                    self.state.activeIndex = self.state.activeIndex - 1;
                    doMove();
                }
            },

            moveLeft = function () {
                if ($(document).trigger("startmoveleft") !== false) {
                    self.state.activeIndex = self.state.activeIndex + 1;
                    doMove();
                }
            };

        return {
            moveRight: moveRight,
            moveLeft: moveLeft,
            doMove: doMove
        };
    })();

    self.imgs = (function () {
        var attachEvents = function () {
            $(".cbImage").on("click", function (event) {
                var dir = this.className.search(/left/gi) !== -1 ? "Right" : "Left",
                    $coll = $(".cbImage"),
                    diff = dir === "Right" ? ($coll.index($(".cbImage.active")) - $coll.index(this)) :
                    ($coll.index($(".cbImage.active")) - $coll.index(this)) * -1,
                    x;

                for (x = 0; x < diff; x++) {
                    self.actions["move" + dir]();
                }
            });
        };

        return {
            attachEvents: attachEvents
        };
    })();

    self.init = (function () {
        var $covers = $(".cbImage"),
            setStageDims = function () {
                self.state.stageDim = {x: $(".stage").outerWidth(), y: $(".stage").outerHeight()};
            },
            setCoverDims = function ($active) {
                self.state.coverDim = {x: $active.outerWidth(), y: $active.outerHeight()};
            },
            getSheet = function () {
                var l = $("#cbGeneratedClasses").length;
                if (l === 0) {
                    var $newsheet = $("<style type='text/css' id='cbGeneratedClasses'></style>"),
                        ss = $newsheet.appendTo("head")[0].sheet;
                }
                else {
                    $("#cbGeneratedClasses").text('');
                    var ss = $("#cbGeneratedClasses")[0].sheet;
                }
                return ss;
            },
            generateClasses = function () {
                var leftfac,
                    rightfac,
                    x,
                    z = 100,//TODO figure equation for zindex, increase closer to activeIndex, decrease after
                    cvrLength = $covers.length,
                    l = cvrLength * 2,
                    ss = getSheet(),
                    al;
                al = (self.state.stageDim.x / 2) - (self.state.coverDim.x / 2);
                ss.insertRule(".stage .active{left:" + al + "px;}", 0);
                for (x = 0; x < l; x++) {
                    leftfac = al - ((self.state.coverDim.x * x) / 2) - (self.state.coverDim.x / 2);
                    rightfac = al + ((self.state.coverDim.x * x) / 2) + (self.state.coverDim.x / 2);
                    ss.insertRule(".inactiveLeft" + x + "{left:" + leftfac + "px;z-index:" + z + ";}", 0);
                    ss.insertRule(".inactiveRight" + x + "{left:" + rightfac + "px;z-index:" + z + ";}", 0);
                }
            },
            doInit = function () {
                var $active = $covers.filter(".active"),
                    activeIndex = $covers.index($active) !== -1 ? $covers.index($active) : 0;
                setStageDims();
                setCoverDims($active);
                generateClasses();
                self.imgs.attachEvents();
                self.state.activeIndex = activeIndex;
                self.actions.doMove();
            }(),

            reInit = function () {
                var $active = $covers.filter(".active");
                setStageDims();
                setCoverDims($active);
                generateClasses();
            };

        $(window).on("resize", function (event) {
            self.init.reInit();
        });

        return {
            reInit: reInit
        };
    })();
})(jQuery);


$("#login").click(function () {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "login",
        data: $('#loginForm').serialize(),
        success: function (data) {
            if (data.success == true) {
                window.location.href = 'http://' + window.location.hostname + '/home/index';
            } else {
                alert(data.message);
            }
        },
        error: function () {
            alert("登录异常，请稍后再试！");
        }
    });
});

$("#register").click(function () {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "register",
        data: $('#registerForm').serialize(),
        success: function (data) {
            if (data.success == true) {
                window.location.href = 'http://' + window.location.hostname + '/personnormal/index';
            } else {
                alert(data.message);
            }
        },
        error: function () {
            alert("登录异常，请稍后再试！");
        }
    });
});