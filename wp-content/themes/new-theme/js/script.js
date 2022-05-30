
if($('#q')){
    let width = q.width = window.screen.width,
        height,
        letters = Array(256).join(1).split('');

    if($('.only-banner').length > 0){
        height = q.height = $('.only-banner').height(); 
    }else{
        height = q.height = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
          )-100;
    }

    var draw = function () {
        q.getContext('2d').fillStyle = 'rgba(0,0,0,.05)';
        q.getContext('2d').fillRect(0, 0, width, height);
        q.getContext('2d').fillStyle = '#0e0';

        letters.map(function (y_pos, index) {
            text = String.fromCharCode(65 + Math.random() * 33);
            x_pos = index * 10;
            q.getContext('2d').fillText(text, x_pos, y_pos);
            letters[index] = (y_pos > 758 + Math.random() * 1e4) ? 0 : y_pos + 10;
    });
};
setInterval(draw, 33);

setTimeout(function(){
    var imgFade = document.getElementById('putin-img');

    imgFade.classList.toggle('fade');
}, 2500);
 
}


if($('#q2')){
    let width = q.width = window.screen.width,
        height,
        letters = Array(256).join(1).split('');

    if($('service-style-two').length > 0){
        height = q.height = $('.service-style-two').height(); 
    }else{
        height = q.height = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
          )-100;
    }

    var draw = function () {
        q.getContext('2d').fillStyle = 'rgba(0,0,0,.05)';
        q.getContext('2d').fillRect(0, 0, width, height);
        q.getContext('2d').fillStyle = '#0e0';

        letters.map(function (y_pos, index) {
            text = String.fromCharCode(65 + Math.random() * 33);
            x_pos = index * 10;
            q.getContext('2d').fillText(text, x_pos, y_pos);
            letters[index] = (y_pos > 758 + Math.random() * 1e4) ? 0 : y_pos + 10;
         });

    };
}
setInterval(draw, 33)
