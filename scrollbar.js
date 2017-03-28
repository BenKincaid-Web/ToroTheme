
$(window).scroll(function() {
    toTop = $('#scrollbar').offset().top;
    docHeight = $(document).height()
    windowHeight = $( window ).height()
    
    
    barWidth = docHeight - toTop - windowHeight;
    
    barPerc = (barWidth/(docHeight - windowHeight)) * 100;
  cssPerc = barPerc + "%";
    console.log(barPerc);
  
    document.getElementById("scrollbar").setAttribute("style", "width:"+cssPerc);
    document.getElementById("scrollbar").style.width = cssPerc;
});
