var inactivityTime = function () {
    var t;
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;

    function logout() {
       
       wondow.reload(); 
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, ((1000*60)*5))
        // 1000 milisec = 1 sec
    }
};