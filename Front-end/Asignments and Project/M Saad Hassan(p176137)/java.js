$(function() {
    $("#idapd").click(AppendComment);
    $("#iddel").click(delComment);
    $("#idshow").click(ShowComments);
    $("#idhide").click(HideComments);
    $("#idhidebox").click(HideCommentBox);
    $("#idshowbox").click(ShowCommentBox);

    // 1. Add the functionality of appending comments one after another.
    function AppendComment() {
        $("#commentsid")[0].innerText += $("#idtext")[0].value;
    }
    // 2. Each comment must have a corresponding delete button to delete that specific comment.
    function delComment() {
        $("#commentsid")[0].innerText = " ";
    }
    // 3. 'Hide Comments' button should hide all comments and change the text of button to 'Show comments'. This should work the other way round as well.
    function HideComments() {
        $("#commentsid").hide();
    }

    function ShowComments() {
        $("#commentsid").show();
    }
    // 4. 'Hide Comment Box' button should hide the input text area and change the text of button to 'Show Comment Box'. This should work the other way round as well.
    function HideCommentBox() {
        $("#idtext").hide();
        $("#idhidebox").hide();
    }

    function ShowCommentBox() {
        $("#idtext").show();
        $("#idhidebox").show();
    }
    // jQuery methods go here...
});