document.getElementById('form-chart-total').addEventListener('submit', loadTotal);
function loadTotal(e) {
    // e.preventDefault();
    var datestart = document.getElementById('chart-total-datestart');
    var dateend = document.getElementById('chart-total-dateend');
    var flag = false;

    var start = new Date(datestart.value);
    var end = new Date(dateend.value);

    if (start > end) {
        alert ("Sai thứ tự ngày!")
        flag = true;
    }

    if (datestart.value.length == 0 && dateend.value.length != 0) {
        alert("Bạn chưa nhập ngày bắt đầu!")
        flag = true;
    }
    if (datestart.value.length != 0 && dateend.value.length == 0) {
        alert("Bạn chưa nhập ngày kết thúc!")
        flag = true;
    }
    if (datestart.value.length == 0 && dateend.value.length == 0) {
        alert("Bạn chưa nhập ngày bắt đầu và ngày kết thúc!")
        flag = true;
    }

    if(flag==true){
        e.preventDefault();
    }
    else
    return true;
}