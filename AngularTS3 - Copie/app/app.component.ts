import {Component} from '@angular/core';

@Component({
    selector: 'my-app',
    template: '' +
    '<div id="tete"><img src="img/lila.png">' +
        '<div id="searchbar">'+
            '<form id="search" action="" class="formulaire">'+
                '<input class="champ" type="text" value="Faites une recherche"/>'+
                '<input class="bouton" type="button" value=" " />'+
            '</form>'+
        '</div>' +
    '</div>' +

    'On merite 20/20 !' +
    '<h1>Bonjour... Ca marche ?</h1>'

})
export class AppComponent {
    title = 'LILA';
}


