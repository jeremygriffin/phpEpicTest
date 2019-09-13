<html>
<head>
	<title>Cool App</title>
</head>
<body>
<?php
if (array_key_exists('response', $_REQUEST)) {
    $response = $_REQUEST['response'];
    $array    = json_decode($response);
    if (!$array) {
        print "<h2>The results were: </h2><p>";
        if ($array['success']) {
            print $array['wroteCount'] . " bytes were stored.";
        } else {
            print "There was an error: <br />"
            . "errorMessage => " . $array['errorMessage'] . "<br />"
            . "errorCode => " . $array['errorCode'] . "<br />";
        }
        print "<br /></p>";
    }
}
?>
    <h2>This App is Good.</h2>

    <p>
        <br />

        <h1>You can edit this demo text!</h1>
        <br />

        <h2>How to use the editor:</h2>
        <br />

        <p>
            Paste your documents in the visual editor on the left or your HTML code in the source editor in the right. <br />
            Edit any of the two areas and see the other changing in real time.&nbsp;
        </p>
        <br />

        <p>Click the Clean button to clean your source code.</p>
        <br />

        <p><strong>&nbsp;link this to like the&nbsp;<a href="#comments" target="_blank" rel="noopener">comments</a></strong></p>
    </p>
</body>
</html>
