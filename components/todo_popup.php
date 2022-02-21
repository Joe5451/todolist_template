<div id="todo_popup" class="todo_popup">
    <div class="todo_popup_title">新增待辦</div>
    
    <form>
        <div class="todo_form_group">
            <label class="todo_form_label">待辦事項</label>
            <input type="text" class="todo_form_control" name="title">
        </div>

        <div class="todo_form_group">
            <label class="todo_form_label"><span>描</span><span>述</span></label>
            <input type="text" class="todo_form_control" name="description">
        </div>
    </form>

    <div class="todo_popup_btn_group">
        <button class="todo_popup_btn">新增</button>
    </div>
    
    <button class="popup_close_btn"><i class="fas fa-times"></i></button>
</div>

<script>
    //  $('#todo_popup').bPopup({
    //     fadeSpeed: 'slow', //can be a string ('slow'/'fast') or int
    //     followSpeed: 1500, //can be a string ('slow'/'fast') or int
    //     modalColor: 'greenYellow'
    // });
</script>