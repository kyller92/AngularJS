import {Component} from '@angular/core';
import {Jsonp} from 'angular2/http';

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
    '<h1>Bonjour... Ca marche ?</h1>'+
    '<h1>{{title}}</h1>'+
    '<p>Tableau:</p>'+
    '<ul>'+
    '    <li *ngFor="let test of tabtest">'+
    '    {{ test }}'+
    '</li>'+
    '</ul>'

})
export class AppComponent {

    title = 'LILA';
    tabtest = ['lol', 'lel', 'lil', 'lawl'];

}




