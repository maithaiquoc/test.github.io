<div id="result">
    Nội dung ajax sẽ được load ở đây
</div>
<input type="button" name="clickme"
       id="clickme" onclick="load_ajax()"
       value="Click Me"/>
</div>
<script src="jquery-3.7.1.min.js"></script>
<script>
    function load_ajax() {
        var code = "001";
        $.ajax({
            type: "GET",
            url: "result.php",
            data: {
                "code": code
            },
            success: function (result) {
                alert(result);
                $("#result").html("<h1 style='color: red'>"+result+"</h1>");
            }
        })
    }
</script>
