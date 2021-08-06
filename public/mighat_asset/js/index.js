
    /******************************start side nav*/
    function openNav() {

        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {

        document.getElementById("mySidenav").style.width = "0";
    }


    function openNav1() {
        document.getElementById("mySideFilter").style.width = "250px";
    }

    function closeNav1() {
        document.getElementById("mySideFilter").style.width = "0";
    }

    /******************************end side nav*/

    /***********************start carousel*/
    var elem = document.querySelector('.carousel');
    var flkty = new Flickity(elem, {
        // options
        cellAlign: 'left',
        contain: true,
        groupCells: 1,
        fullscreen: true,
        lazyLoad: 2,
        imagesLoaded: true
    });
    /***********************end carousel*/
    /***********************start carousel1*/
    var elem = document.querySelector('.carousel1');
    var flkty = new Flickity(elem, {
        // options
        wrapAround: true

    });
    /***********************end carousel1*/

    /***********************start carousel2*/


    /***********************start carousel*/
    var elem = document.querySelector('#carousel2 .carousel');
    var flkty = new Flickity(elem, {
        // options
        cellAlign: 'left',
        contain: true,
        groupCells: 1,
        fullscreen: true,
        lazyLoad: 2,
        imagesLoaded: true
    });
    /***********************end carousel*/





