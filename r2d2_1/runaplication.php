<html>
<head>
</head>
<body>
<p/><input type="button" width="15" value="Run Exe" onclick="RunGEdit();"/></input></p>

<script type="text/javascript">
function RunGEdit()
{
    netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');
    var exe = Components.classes['@mozilla.org/file/local;1'].createInstance(Components.interfaces.nsILocalFile);
    exe.initWithPath("/usr/bin/gedit");
    var run = Components.classes['@mozilla.org/process/util;1'].createInstance(Components.interfaces.nsIProcess);
    run.init(exe);        
    var parameters = [document.URL];
    run.run(true, parameters,parameters.length);
}
</script>
</body>
</html>