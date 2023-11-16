function validateForm() {
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var score = document.getElementById("score").value;

    // 修正点
    var comment = document.getElementById("comment").value;

    if (name == "" || subject == "" || score == ""|| comment == "") {
        alert("すべての項目を入力してください");
        return false;
    }
    return true;
}
