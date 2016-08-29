$(document).ready(function(){
    
    $('button').on('click',function(){

        $('button').after('<div class="ya-share2" id="my-share2" data-services="vkontakte,facebook,odnoklassniki,telegram"></div>');
        
        var share = Ya.share2('my-share2', {
            content: {
                url: 'https://stihostroitel.ru',
                title: 'Твои глаза',
                description: 'Привет, это я <br> Как твои дела?',
                image: 'https://yastatic.net/morda-logo/i/logo.svg'   
            },
            hooks: {
                onready: function () {
                    alert('блок инициализирован');
                },
        
                onshare: function (name) {
                    alert('нажата кнопка' + name);
                }
            }
        });
    })
});