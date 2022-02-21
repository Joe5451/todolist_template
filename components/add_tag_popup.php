<div id="add_tag_popup" class="todo_popup">
    <div class="todo_popup_title">新增標籤</div>
    <div id="add_tag_popup_content">
        <div class="flex flex-wrap mb-5">
            <div class="tag_btn">Side Project</div>
            <div class="tag_btn">測試</div>
            <div class="tag_btn">興趣</div>
            <div class="tag_btn">緊急</div>
            <div class="tag_btn">學習</div>
            <div class="tag_btn">工作排程</div>
        </div>
    
        <form>
            <div class="todo_form_group">
                <label class="todo_form_label">標籤名稱</label>
                <input type="text" class="todo_form_control" name="tag_name">
            </div>
    
            <div class="todo_form_group">
                <label class="todo_form_label">標籤顏色</label>
                <input type="text" id="tag_color" name="tag_color" class="todo_form_control" value="#123456" />
            </div>
            
            <div id="tag_colorpicker" class="flex justify-center mb-5"></div>
        </form>
    </div>

    <div class="todo_popup_btn_group">
        <button class="todo_popup_btn">新增</button>
    </div>
    
    <button class="popup_close_btn"><i class="fas fa-times"></i></button>
</div>

<script>
    $('#tag_add_btn').click(function() {
        $('#add_tag_popup').bPopup({
            fadeSpeed: 'slow', //can be a string ('slow'/'fast') or int
            followSpeed: 1500, //can be a string ('slow'/'fast') or int
            positionStyle: 'fixed',
            modal: true,
            closeClass: 'popup_close_btn',
        });
    });

    $(document).ready(function() {
        $('#tag_colorpicker').farbtastic('#tag_color');
    });

</script>