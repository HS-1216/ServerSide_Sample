function validateForm() {
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var score = document.getElementById("score").value;

    if (name == "" || subject == "" || score == "") {
        alert("すべての項目を入力してください");
        return false;
    }
    return true;
}
