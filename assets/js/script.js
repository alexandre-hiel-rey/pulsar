window.onscroll = function() {

    if(document.documentElement.scrollTop > 80)
    {
        document.getElementById("header").style.background = '#212529';
        document.getElementById("header").style.height = '8vh';
        document.getElementById("header").style.padding = '0';
        document.getElementById("header").style.borderBottom = '4px solid #ffffff';
    }
    else
    {
        document.getElementById("header").style.background = 'transparent';
        document.getElementById("header").style.height = '10vh';
        document.getElementById("header").style.padding = '20px 10px';
        document.getElementById("header").style.borderBottom = '0';

    }
}