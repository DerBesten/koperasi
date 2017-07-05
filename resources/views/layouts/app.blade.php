<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Koperasi</title>

  <link rel="apple-touch-icon" href="{{ url('../images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{ url('../images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ url('../css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('../css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{ url('../css/site.min.css')}}">



  <link rel="stylesheet" href="{{ url('../vendor/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/flag-icon-css/flag-icon.css')}}">

  <!-- Plugin -->
  <link rel="stylesheet" href="{{ url('../vendor/raty/jquery.raty.css')}}">
  <!-- <link rel="stylesheet" href="{{ url('../vendor/chartist-js/chartist.css')}}"> -->
  <link rel="stylesheet" href="{{ url('../vendor/aspieprogress/asPieProgress.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-table/bootstrap-table.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/select2/select2.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-tokenfield/bootstrap-tokenfield.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-select/bootstrap-select.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/icheck/icheck.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/asrange/asRange.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/asspinner/asSpinner.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/clockpicker/clockpicker.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/ascolorpicker/asColorPicker.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-touchspin/bootstrap-touchspin.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/card/card.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/jquery-labelauty/jquery-labelauty.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/bootstrap-maxlength/bootstrap-maxlength.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/jt-timepicker/jquery-timepicker.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/jquery-strength/jquery-strength.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/multi-select/multi-select.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/typeahead-js/typeahead.css')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ url('../css/dashboard/v2.css')}}">
  <link rel="stylesheet" href="{{ url('../css/pages/profile.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ url('../fonts/font-awesome/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ url('../fonts/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{ url('../fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    .rating-hint {
      display: inline;
      margin-left: 10px;
      vertical-align: sub;
    }

    .bootstrap-select {
      width: 100% !important;
    }

    .datepair-wrap {
      position: relative;
      overflow: hidden;
    }

    .input-daterange-wrap {
      float: left;
    }

    .input-daterange-to {
      float: left;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
    }

    @media (max-width: 1360px) {
      .input-daterange-wrap,
      .input-daterange-to {
        display: block;
        float: none;
      }
    }

    .page-user .page-content .page-user-sortlist {
      position: absolute;
      right: 0;
      top: 5px;
      z-index: 2;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../vendor/media-match/media.match.min.js"></script>
    <script src="../vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ url('../vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{ url('../vendor/breakpoints/breakpoints.js')}}"></script>
  <script src="http:://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http:://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <script>
    Breakpoints();
  </script>

</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center " data-toggle="#site-navbar-collapse">
        <img class="navbar-brand-logo" src="{{ url('../images/logo.png')}}" title="Remark">
        <span class="navbar-brand-text"> Koperasi</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
      </div>
      <!-- End Navbar Collapse -->

    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">Data Karyawan</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{ url('karyawan/datakar')}}" data-slug="angular">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">PramuGolf(All)</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{ url('karyawan')}}" data-slug="angular">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">PramuGolf (Active and StandBy)</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{ url('karyawan')}}" data-slug="angular">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">PramuGolf (Booking)</span>
              </a>
            </li>
          </ul>
          <ul class="site-menu">
            <li class="site-menu-category">Comment</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{ url('comment')}}" data-slug="angular">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Comment</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>

  <!-- Page -->
  <div class="page">
    @yield('content')
  </div>
  <!-- End Page -->



  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2017 DerBesten</span>
    <!-- <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">DerBesten</a>
    </div> -->
  </footer>

  <script src="{{ url('../js/jquery-2.1.4.min.js')}}"></script>
  <!-- Core  -->
  <script src="{{ url('../vendor/jquery/jquery.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{ url('../vendor/animsition/jquery.animsition.js')}}"></script>
  <script src="{{ url('../vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{ url('../vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{ url('../vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{ url('../vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{ url('../vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{ url('../vendor/intro-js/intro.js')}}"></script>
  <script src="{{ url('../vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{ url('../vendor/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{ url('../vendor/bootstrap-table/bootstrap-table.min.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js')}}"></script>
  <script src="{{ url('../vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{ url('../vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
  <!-- <script src="{{ url('../vendor/gmaps/gmaps.js')}}"></script> -->
  <script src="{{ url('../vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
  <script src="{{ url('../vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
  <script src="{{ url('../vendor/select2/select2.min.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-select/bootstrap-select.js')}}"></script>
  <script src="{{ url('../vendor/icheck/icheck.min.js')}}"></script>
  <script src="{{ url('../vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{ url('../vendor/asrange/jquery-asRange.min.js')}}"></script>
  <script src="{{ url('../vendor/asspinner/jquery-asSpinner.min.js')}}"></script>
  <script src="{{ url('../vendor/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
  <script src="{{ url('../vendor/ascolor/jquery-asColor.min.js')}}"></script>
  <script src="{{ url('../vendor/asgradient/jquery-asGradient.min.js')}}"></script>
  <script src="{{ url('../vendor/ascolorpicker/jquery-asColorPicker.min.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
  <script src="{{ url('../vendor/jquery-knob/jquery.knob.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
  <script src="{{ url('../vendor/card/jquery.card.js')}}"></script>
  <script src="{{ url('../vendor/jquery-labelauty/jquery-labelauty.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
  <script src="{{ url('../vendor/jt-timepicker/jquery.timepicker.min.js')}}"></script>
  <script src="{{ url('../vendor/datepair-js/datepair.min.js')}}"></script>
  <script src="{{ url('../vendor/datepair-js/jquery.datepair.min.js')}}"></script>
  <script src="{{ url('../vendor/jquery-strength/jquery-strength.min.js')}}"></script>
  <script src="{{ url('../vendor/multi-select/jquery.multi-select.js')}}"></script>
  <script src="{{ url('../vendor/typeahead-js/bloodhound.min.js')}}"></script>
  <script src="{{ url('../vendor/typeahead-js/typeahead.jquery.min.js')}}"></script>
  <script src="{{ url('../vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
  <script src="{{ url('../vendor/filament-tablesaw/tablesaw.js')}}"></script>
  <script src="{{ url('../vendor/slidepanel/jquery-slidePanel.js')}}"></script>
  <script src="{{ url('../vendor/aspaginator/jquery.asPaginator.min.js')}}"></script>
  <script src="{{ url('../vendor/raty/jquery.raty.js')}}"></script>

  <!-- Scripts -->
  <script src="{{ url('../js/core.js')}}"></script>
  <script src="{{ url('../js/site.js')}}"></script>

  <script src="{{ url('../js/sections/menu.js')}}"></script>
  <script src="{{ url('../js/sections/menubar.js')}}"></script>
  <script src="{{ url('../js/sections/sidebar.js')}}"></script>

  <script src="{{ url('../js/configs/config-colors.js')}}"></script>
  <script src="{{ url('../js/configs/config-tour.js')}}"></script>

  <script src="{{ url('../js/components/asscrollable.js')}}"></script>
  <script src="{{ url('../js/components/animsition.js')}}"></script>
  <script src="{{ url('../js/components/slidepanel.js')}}"></script>
  <script src="{{ url('../js/components/switchery.js')}}"></script>
  <!-- <script src="{{ url('../js/components/gmaps.js')}}"></script> -->
  <script src="{{ url('../js/components/matchheight.js')}}"></script>
  <script src="{{ url('../js/components/jquery-placeholder.js')}}"></script>
  <script src="{{ url('../js/components/material.js')}}"></script>
  <script src="{{ url('../js/components/select2.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-tokenfield.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-tagsinput.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-select.js')}}"></script>
  <script src="{{ url('../js/components/icheck.js')}}"></script>
  <script src="{{ url('../js/components/switchery.js')}}"></script>
  <script src="{{ url('../js/components/asrange.js')}}"></script>
  <script src="{{ url('../js/components/asspinner.js')}}"></script>
  <script src="{{ url('../js/components/clockpicker.js')}}"></script>
  <script src="{{ url('../js/components/ascolorpicker.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-maxlength.js')}}"></script>
  <script src="{{ url('../js/components/jquery-knob.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-touchspin.js')}}"></script>
  <script src="{{ url('../js/components/card.js')}}"></script>
  <script src="{{ url('../js/components/jquery-labelauty.js')}}"></script>
  <script src="{{ url('../js/components/bootstrap-datepicker.js')}}"></script>
  <script src="{{ url('../js/components/jt-timepicker.js')}}"></script>
  <script src="{{ url('../js/components/datepair-js.js')}}"></script>
  <script src="{{ url('../js/components/jquery-strength.js')}}"></script>
  <script src="{{ url('../js/components/multi-select.js')}}"></script>
  <script src="{{ url('../js/components/jquery-placeholder.js')}}"></script>
  <script src="{{ url('../js/plugins/responsive-tabs.js')}}"></script>
  <script src="{{ url('../js/components/tabs.js')}}"></script>
  <script src="{{ url('../js/plugins/sticky-header.js')}}"></script>
  <script src="{{ url('../js/components/aspaginator.js')}}"></script>
  <script src="{{ url('../js/apps/app.js')}}"></script>
  <script src="{{ url('../js/apps/contacts.js')}}"></script>
  <script src="{{ url('../js/components/raty.js')}}"></script>


  <script>
    (function(document, window, $) {
      'use strict';
      var AppContacts = window.AppContacts;

      $(document).ready(function() {
        AppContacts.run();
      });
    })(document, window, jQuery);
  </script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      $("#nama_caddy").change(function(){
        $.ajax({
          'type': 'POST',
          'url': '/comment/ajax/kode',
          'data': { nama: $(this).val(), _token : '{{ csrf_token() }}' },
          success: function(data) {
            $("#caddy_id").val(data.caddy_id);
          },
          error: function (jqHRX, textStatus, errorThrow){
            alert(errorThrow);
          }
        });
      });

      $(function(){
        $("#datepicker").datepicker();
      });

      window.onload=function(){
        $('#datepicker').on('change', function() {
          var dob = new Date(this.value);
          var today = new Date();
          var age = Math.floor((today-dob) / (365.25*24*60*60*1000));
          $('#umur').val(age);
        });
      }

      function cellStyle(value, row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
          return {
            classes: classes[index / 2]
          };
        }
        return {};
      }

      function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
          return {
            classes: classes[index / 2]
          };
        }
        return {};
      }

      function scoreSorter(a, b) {
        if (a > b) return 1;
        if (a < b) return -1;
        return 0;
      }

      function nameFormatter(value) {
        return value + '<i class="icon wb-book" aria-hidden="true"></i> ';
      }

      function starsFormatter(value) {
        return '<i class="icon wb-star" aria-hidden="true"></i> ' + value;
      }

      function queryParams() {
        return {
          type: 'owner',
          sort: 'updated',
          direction: 'desc',
          per_page: 100,
          page: 1
        };
      }

      function buildTable($el, cells, rows) {
        var i, j, row,
          columns = [],
          data = [];

        for (i = 0; i < cells; i++) {
          columns.push({
            field: 'field' + i,
            title: 'Cell' + i
          });
        }
        for (i = 0; i < rows; i++) {
          row = {};
          for (j = 0; j < cells; j++) {
            row['field' + j] = 'Row-' + i + '-' + j;
          }
          data.push(row);
        }
        $el.bootstrapTable('destroy').bootstrapTable({
          columns: columns,
          data: data,
          iconSize: 'outline',
          icons: {
            columns: 'wb-list-bulleted'
          }
        });
      }
      // Example Bootstrap Table From Data
      // ---------------------------------
      (function() {
        var bt_data = [{
          "Tid": "1",
          "First": "Jill",
          "Last": "Smith",
          "Score": "50"
        }, {
          "Tid": "2",
          "First": "Eve",
          "Last": "Jackson",
          "Score": "94"
        }, {
          "Tid": "3",
          "First": "John",
          "Last": "Doe",
          "Score": "80"
        }, {
          "Tid": "4",
          "First": "Adam",
          "Last": "Johnson",
          "Score": "67"
        }, {
          "Tid": "5",
          "First": "Fish",
          "Last": "Johnson",
          "Score": "100"
        }, {
          "Tid": "6",
          "First": "CC",
          "Last": "Joson",
          "Score": "77"
        }, {
          "Tid": "7",
          "First": "Piger",
          "Last": "Yoson",
          "Score": "87"
        }];

        $('#exampleTableFromData').bootstrapTable({
          data: bt_data,
          // mobileResponsive: true,
          height: "250"
        });
      })();

      // Example Bootstrap Table Columns
      // -------------------------------
      (function() {
        $('#exampleTableColumns').bootstrapTable({
          url: "../data/bootstrap_table_test.json",
          height: "400",
          iconSize: 'outline',
          showColumns: true,
          icons: {
            refresh: 'wb-refresh',
            toggle: 'wb-order',
            columns: 'wb-list-bulleted'
          }
        });
      })();

      // Example Bootstrap Table Large Columns
      // -------------------------------------
      buildTable($('#exampleTableLargeColumns'), 100, 100);

      // Example Bootstrap Table Toolbar
      // -------------------------------
      (function() {
        $('#exampleTableToolbar').bootstrapTable({
          // url: "../data/bootstrap_table_test2.json",
          search: true,
          showRefresh: true,
          showToggle: true,
          showColumns: true,
          toolbar: '#exampleToolbar',
          iconSize: 'outline',
          icons: {
            refresh: 'wb-refresh',
            toggle: 'wb-order',
            columns: 'wb-list-bulleted'
          }
        });
      })();

      // Example Bootstrap Table Events
      // ------------------------------
      (function() {
        $('#exampleTableEvents').bootstrapTable({
          url: "../data/bootstrap_table_test.json",
          search: true,
          pagination: true,
          showRefresh: true,
          showToggle: true,
          showColumns: true,
          iconSize: 'outline',
          toolbar: '#exampleTableEventsToolbar',
          icons: {
            refresh: 'wb-refresh',
            toggle: 'wb-order',
            columns: 'wb-list-bulleted'
          }
        });

        var $result = $('#examplebtTableEventsResult');

        $('#exampleTableEvents').on('all.bs.table', function(e, name,
            args) {
            console.log('Event:', name, ', data:', args);
          })
          .on('click-row.bs.table', function(e, row, $element) {
            $result.text('Event: click-row.bs.table');
          })
          .on('dbl-click-row.bs.table', function(e, row, $element) {
            $result.text('Event: dbl-click-row.bs.table');
          })
          .on('sort.bs.table', function(e, name, order) {
            $result.text('Event: sort.bs.table');
          })
          .on('check.bs.table', function(e, row) {
            $result.text('Event: check.bs.table');
          })
          .on('uncheck.bs.table', function(e, row) {
            $result.text('Event: uncheck.bs.table');
          })
          .on('check-all.bs.table', function(e) {
            $result.text('Event: check-all.bs.table');
          })
          .on('uncheck-all.bs.table', function(e) {
            $result.text('Event: uncheck-all.bs.table');
          })
          .on('load-success.bs.table', function(e, data) {
            $result.text('Event: load-success.bs.table');
          })
          .on('load-error.bs.table', function(e, status) {
            $result.text('Event: load-error.bs.table');
          })
          .on('column-switch.bs.table', function(e, field, checked) {
            $result.text('Event: column-switch.bs.table');
          })
          .on('page-change.bs.table', function(e, size, number) {
            $result.text('Event: page-change.bs.table');
          })
          .on('search.bs.table', function(e, text) {
            $result.text('Event: search.bs.table');
          });
      })();
    })(document, window, jQuery);
  </script>

  <script>
    $(document).ready(function($) {

      Site.run();

      //widget-pie-progress
      (function() {
        $("#widgetPieProgress .pieProgress-one").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("primary", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-two").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("cyan", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-three").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("purple", 600),
          trackcolor: $.colors("blue-grey", 100),
        });
      })();
    });
  </script>
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });

      // Example Reset Current
      // ---------------------
      (function() {
        // Reset Current
        $('#exampleTimeButton').on('click', function() {
          $('#inputTextCurrent').timepicker('setTime', new Date());
        });
      })();

      // Example inline datepicker
      // ---------------------
      (function() {
        // Reset Current
        $('#inlineDatepicker').datepicker();
        $("#inlineDatepicker").on("changeDate", function(event) {
          $("#inputHiddenInline").val(
            $("#inlineDatepicker").datepicker('getFormattedDate')
          );
        });
      })();

      // Example Tokenfield With Typeahead
      // ---------------------------------
      (function() {
        var engine = new Bloodhound({
          local: [{
            value: 'red'
          }, {
            value: 'blue'
          }, {
            value: 'green'
          }, {
            value: 'yellow'
          }, {
            value: 'violet'
          }, {
            value: 'brown'
          }, {
            value: 'purple'
          }, {
            value: 'black'
          }, {
            value: 'white'
          }],
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace(
            'value'),
          queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        // engine.initialize();

        $('#inputTokenfieldTypeahead').tokenfield({
          typeahead: [null, {
            name: 'engine',
            displayKey: 'value',
            source: engine.ttAdapter()
          }]
        });
      })();

      // Example Tokenfield Events
      // -------------------------
      (function() {
        $('#inputTokenfieldEvents')
          .on('tokenfield:createtoken', function(e) {
            var data = e.attrs.value.split('|');
            e.attrs.value = data[1] || data[0];
            e.attrs.label = data[1] ? data[0] + ' (' + data[1] + ')' :
              data[0];
          })
          .on('tokenfield:createdtoken', function(e) {
            // Über-simplistic e-mail validation
            var re = /\S+@\S+\.\S+/;
            var valid = re.test(e.attrs.value);
            if (!valid) {
              $(e.relatedTarget).addClass('invalid');
            }
          })
          .on('tokenfield:edittoken', function(e) {
            if (e.attrs.label !== e.attrs.value) {
              var label = e.attrs.label.split(' (');
              e.attrs.value = label[0] + '|' + e.attrs.value;
            }
          })
          .on('tokenfield:removedtoken', function(e) {
            if (e.attrs.length > 1) {
              var values = $.map(e.attrs, function(attrs) {
                return attrs.value;
              });
              alert(e.attrs.length +
                ' tokens removed! Token values were: ' + values.join(
                  ', '));
            } else {
              alert('Token removed! Token value was: ' + e.attrs.value);
            }
          })
          .tokenfield();
      })();

      // Example Tags Input Objects as tags
      // ----------------------------------
      (function() {
        var cities = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: '../data/cities.json'
        });
        cities.initialize();

        var options = $.extend(true, {}, $.components.getDefaults(
          "tagsinput"), {
          itemValue: 'value',
          itemText: 'text',
          typeaheadjs: [{
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
          }]
        });

        var $input = $('#inputTagsObject');
        $input.tagsinput(options);

        $input.tagsinput('add', {
          "value": 1,
          "text": "Amsterdam",
          "continent": "Europe"
        });
        $input.tagsinput('add', {
          "value": 4,
          "text": "Washington",
          "continent": "America"
        });
        $input.tagsinput('add', {
          "value": 7,
          "text": "Sydney",
          "continent": "Australia"
        });
        $input.tagsinput('add', {
          "value": 10,
          "text": "Beijing",
          "continent": "Asia"
        });
        $input.tagsinput('add', {
          "value": 13,
          "text": "Cairo",
          "continent": "Africa"
        });
      })();

      // Example Tags Input Categorizing
      // -------------------------------
      (function() {
        var cities = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: '../data/cities.json'
        });
        cities.initialize();

        var options = $.extend(true, {}, $.components.getDefaults(
          "tagsinput"), {
          tagClass: function(item) {
            switch (item.continent) {
              case 'Europe':
                return 'label label-primary';
              case 'America':
                return 'label label-danger';
              case 'Australia':
                return 'label label-success';
              case 'Africa':
                return 'label label-default';
              case 'Asia':
                return 'label label-warning';
            }
          },
          itemValue: 'value',
          itemText: 'text',
          typeaheadjs: [{
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
          }]
        });
        var $input = $('#inputTagsCategorizing');

        $input.tagsinput(options);

        $input.tagsinput('add', {
          "value": 1,
          "text": "Amsterdam",
          "continent": "Europe"
        });
        $input.tagsinput('add', {
          "value": 4,
          "text": "Washington",
          "continent": "America"
        });
        $input.tagsinput('add', {
          "value": 7,
          "text": "Sydney",
          "continent": "Australia"
        });
        $input.tagsinput('add', {
          "value": 10,
          "text": "Beijing",
          "continent": "Asia"
        });
        $input.tagsinput('add', {
          "value": 13,
          "text": "Cairo",
          "continent": "Africa"
        });

      })();

      // Example AsSpinner
      // -----------------
      (function() {
        // Custom Format
        var options = $.extend({}, $.components.getDefaults("asSpinner"), {
          format: function(value) {
            return value + '%';
          }
        });

        $('#inputSpinnerCustomFormat').asSpinner(options);
      })();

      // Example Multi-Select
      // --------------------
      (function() {
        // for multi-select public methods example
        $('.multi-select-methods').multiSelect();
        $('#buttonSelectAll').click(function() {
          $('.multi-select-methods').multiSelect('select_all');
          return false;
        });
        $('#buttonDeselectAll').click(function() {
          $('.multi-select-methods').multiSelect('deselect_all');
          return false;
        });
        $('#buttonSelectSome').click(function() {
          $('.multi-select-methods').multiSelect('select', ['Idaho',
            'Montana', 'Arkansas'
          ]);
          return false;
        });
        $('#buttonDeselectSome').click(function() {
          $('.multi-select-methods').multiSelect('select', ['Idaho',
            'Montana', 'Arkansas'
          ]);
          return false;
        });
        $('#buttonRefresh').on('click', function() {
          $('.multi-select-methods').multiSelect('refresh');
          return false;
        });
        $('#buttonAdd').on('click', function() {
          $('.multi-select-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
          });
          return false;
        });
      })();

      // Example Typeahead
      // -----------------
      (function() {
        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',
          'California',
          'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
          'Hawaii',
          'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
          'Louisiana',
          'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
          'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada',
          'New Hampshire',
          'New Jersey', 'New Mexico', 'New York', 'North Carolina',
          'North Dakota',
          'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
          'South Carolina', 'South Dakota', 'Tennessee', 'Texas',
          'Utah', 'Vermont',
          'Virginia', 'Washington', 'West Virginia', 'Wisconsin',
          'Wyoming'
        ];

        // basic & Styled
        // --------------
        (function() {
          var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
              var matches, substrRegex;

              // an array that will be populated with substring matches
              matches = [];

              // regex used to determine if a string contains the substring `q`
              substrRegex = new RegExp(q, 'i');

              // iterate through the pool of strings and for any string that
              // contains the substring `q`, add it to the `matches` array
              $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                  matches.push(str);
                }
              });

              cb(matches);
            };
          };

          $('#exampleTypeaheadBasic, #exampleTypeaheadStyle').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'states',
            source: substringMatcher(states)
          });
        })();

        // bloodhound
        // ----------
        (function() {
          var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',
            'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida',
            'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas',
            'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan',
            'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska',
            'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina',
            'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
            'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas',
            'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin',
            'Wyoming'
          ];
          // constructs the suggestion engine
          var state = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: states
          });

          $('#exampleTypeaheadBloodhound').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'states',
            source: state
          });
        })();

        // Prefetch typeahead
        // ----------------
        (function() {
          var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: '../data/countries.json'
          });

          // passing in `null` for the `options` arguments will result in the default
          // options being used
          $('#exampleTypeaheadPrefetch').typeahead(null, {
            name: 'countries',
            source: countries
          });
        })();

      })();
    })(document, window, jQuery);
  </script>

</body>

</html>
