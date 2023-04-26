document.getElementById('form-chart-bestsell').addEventListener('submit', loadBestSell);
function loadBestSell(e) {
    // e.preventDefault();
    var datestart = document.getElementById('chart-bestsell-datestart');
    var dateend = document.getElementById('chart-bestsell-dateend');
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
