<?php
include '../../trozos/session.php';

seguridad("admin");
if (version_compare(phpversion(), '5.3.0', '<')) { // php version isn't high enough
    $basedir = dirname(__FILE__) . '';
} else {
    $basedir = __DIR__ . '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>PDFJSAnnotate</title>


    <link rel="stylesheet" type="text/css" href="shared/toolbar.css"/>
    <link rel="stylesheet" type="text/css" href="shared/pdf_viewer.css"/>

    <link rel="stylesheet" type="text/css" href="shared/pdfViewer/pdfviewer.css">
</head>
<body>
<div class="toolbar">
    <button class="cursor" type="button" title="Cursor" data-tooltype="cursor">➚</button>

    <div class="spacer"></div>

    <button class="rectangle" type="button" title="Rectangle" data-tooltype="area">&nbsp;</button>
    <button class="highlight" type="button" title="Highlight" data-tooltype="highlight">&nbsp;</button>
    <button class="strikeout" type="button" title="Strikeout" data-tooltype="strikeout">&nbsp;</button>

    <div class="spacer"></div>

    <button class="text" type="button" title="Text Tool" data-tooltype="text"></button>
    <select class="text-size"></select>
    <div class="text-color"></div>



    <div class="spacer"></div>

    <button class="comment" type="button" title="Comment" data-tooltype="point">🗨</button>

    <div class="spacer"></div>

    <div class="spacer"></div>

    <a href="javascript://" class="clear" title="Clear">×</a>
    <a id="save" href="">Guardar notas</a>
</div>
<div id="content-wrapper">
    <div id="viewer" class="pdfViewer"></div>
</div>
<div id="comment-wrapper">
    <h4>Comments</h4>
    <div class="comment-list">
        <div class="comment-list-container">
            <div class="comment-list-item">No comments</div>
        </div>
        <form class="comment-list-form" style="display:none;">
            <input type="text" placeholder="Add a Comment"/>
        </form>
    </div>
</div>
<script src="shared/pdf.js"></script>
<script src="shared/pdf_viewer.js"></script>
<script src="index.js"></script>
<script src="../../js/jquery-1.8.2.min.js"></script>
<script src="shared/pdfViewer/pdfviewer.js"></script>



</body>
</html>
