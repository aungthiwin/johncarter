marqueeInit({
        uniqueid: 'mycrawler',
        style: {
            'width': '100%',
             'color': '#fff',
             'background': '#D8402A',
             'font-family':'Zawgyi-One',
             'animation': 'marquee 100s linear infinite',
             'white-space': 'nowrap',
             'font-size' : '1.5em'
        },
        inc: 5, //speed - pixel increment for each iteration of this marquee's movement
        mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
        moveatleast: 2,
        neutral: 150,
        persist: true,
        savedirection: true
});