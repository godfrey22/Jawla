<html lang="pt-br" class="gr__rawgit_com"><head>
    <title>Timepicker.js — Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <script src="//cdn.jsdelivr.net/highlight.js/9.2.0/highlight.min.js"></script>
    <link href="//cdn.jsdelivr.net/highlight.js/9.2.0/styles/default.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/meyer-reset/2.0/reset.min.css" rel="stylesheet">
    <link href="../build/timepicker.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font: 1.2em/1.3 'Raleway', sans-serif;
            color: #222;
            font-weight: 400;
            padding: 20px 40px;
            background: linear-gradient(#efefef, #999) fixed;
        }
        :focus {outline:none}
        ::-moz-focus-inner {border:0}
        h1 {
            font-size: 250%;
            text-align: center;
            margin: 10px 0;
            font-weight: 700;
        }
        h3 {
            margin: 5px 0;
            font-weight: 700;
        }
        div.table {
            position: relative;
            display: table;
        }
        input {
            padding: 5px 0;
            font-size: 1.5em;
            font-family: inherit;
            width: 120px;
        }
        .center { text-align: center }
        .right { position:absolute; right: 5px }
        span.icon {
            position: absolute;
            right: 1px;
            top: 1px;
            padding: 5px;
            background-color: #eee;
            border-left: 1px solid #ccc;
        }
        @-moz-document url-prefix() {
            span.icon {
                right: 2px;
                top: 3px;
            }
        }
        i.icon, a.icon {
            background: url("clock.png") no-repeat center center;
        }
        i.icon {
            display: block;
            width: 32px;
            height: 36px;
        }
        a.icon {
            display: table-cell;
            width: 32px;
            text-indent: -9999px;
            border: 1px solid transparent;
        }
        a.icon:hover {
            cursor: pointer;
            background-color: #eee;
            border: 1px solid #ccc;
        }
        a.link {
            text-decoration: none;
            color: inherit;
            border-bottom: 1px dotted #333;
        }
        a.link:hover {
            border-bottom: 1px solid #333;
        }
    </style>
</head>
<body data-gr-c-s-loaded="true">
<h1>
    <a href="https://github.com/jonataswalker/timepicker.js" class="link">Timepicker.js</a> — Example
</h1>
<h3>Focusing:</h3>
<div class="table right">
    <span class="icon"><i class="icon"></i></span>
    <input type="text" id="time" placeholder="Time">
</div>
<h3 style="margin-top: 10px">Triggering:</h3>
<div class="table">
    <input type="text" id="time2" class="center" placeholder="Time">
    <a id="link" class="icon">Click to choose</a>
</div>
<div style="margin-top: 10px">
      <pre><code class="javascript hljs">
        <span class="hljs-keyword">var</span> timepicker = <span class="hljs-keyword">new</span> TimePicker([<span class="hljs-string">'time'</span>, <span class="hljs-string">'link'</span>], {
          theme: <span class="hljs-string">'dark'</span>, <span class="hljs-comment">// 'blue-grey'</span>
          lang: <span class="hljs-string">'en'</span>
        });

        timepicker.on(<span class="hljs-string">'change'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">evt</span>) </span>{
          <span class="hljs-keyword">var</span> value = (evt.hour || <span class="hljs-string">'00'</span>) + <span class="hljs-string">':'</span> + (evt.minute || <span class="hljs-string">'00'</span>);

          <span class="hljs-keyword">if</span> (evt.element.id == <span class="hljs-string">'link'</span>) {
            time2.value = value;
          } <span class="hljs-keyword">else</span> {
            evt.element.value = value;
          }
        });
      </code></pre>
</div>
<script src="../build/timepicker.min.js"></script>
<script src="example.js"></script><div class="_jw-tpk-container _jw-tpk-blue-grey" style="z-index: 10; display: none; left: 35px; top: 184px; opacity: -0.075;"><div class="_jw-tpk-header"><div class="_jw-tpk-hour">Hour</div><div class="_jw-tpk-minute">Minute</div></div><div class="_jw-tpk-body"><div id="hour_list_id" class="_jw-tpk-hour"><ol><li><a data-hour="0">0</a></li><li><a data-hour="1">1</a></li><li><a data-hour="2">2</a></li><li><a data-hour="3">3</a></li><li><a data-hour="4">4</a></li><li><a data-hour="5">5</a></li></ol><ol><li><a data-hour="6">6</a></li><li><a data-hour="7">7</a></li><li><a data-hour="8">8</a></li><li><a data-hour="9">9</a></li><li><a data-hour="10">10</a></li><li><a data-hour="11">11</a></li></ol><ol><li><a data-hour="12">12</a></li><li><a data-hour="13">13</a></li><li><a data-hour="14">14</a></li><li><a data-hour="15" class="">15</a></li><li><a data-hour="16">16</a></li><li><a data-hour="17">17</a></li></ol><ol><li><a data-hour="18">18</a></li><li><a data-hour="19">19</a></li><li><a data-hour="20">20</a></li><li><a data-hour="21">21</a></li><li><a data-hour="22">22</a></li><li><a data-hour="23">23</a></li></ol></div><div id="minute_list_id" class="_jw-tpk-minute"><ol><li><a data-minute="00">00</a></li><li><a data-minute="05">05</a></li><li><a data-minute="10">10</a></li></ol><ol><li><a data-minute="15">15</a></li><li><a data-minute="20">20</a></li><li><a data-minute="25">25</a></li></ol><ol><li><a data-minute="30">30</a></li><li><a data-minute="35" class="">35</a></li><li><a data-minute="40">40</a></li></ol><ol><li><a data-minute="45">45</a></li><li><a data-minute="50">50</a></li><li><a data-minute="55">55</a></li></ol></div></div></div>


</body></html>