/*lehe laadimisel rakendatakse esimesele listielemendile klass 'active'
 nupule tekstiga 'edasi' klikkides võetakse kõigilt listielementidelt klass ära ning antakse järjekorras järgmisele elemendile.
 St kui enne oli klass esimesel, siis nüüd peaks ta olema AINULT teisel elemendil.

 Kui enam järgmist elementi pole (hetkel on klass viimasel elemendil), peaks klass rakenduma esimesele elemendile.

 nupule tekstiga 'tagasi' klikkides võetakse kõigilt listielementidelt klass ära ning antakse järjekorras eelmisele elemendile.
 St kui enne oli klass teisel, siis nüüd peaks ta olema AINULT esimesel elemendil.

 Kui enam eelmist elementi pole (hetkel on klass esimesel elemendil), peaks klass rakenduma viimasele elemendile.

 */

window.onload = function () {

//lehe laadimisel rakendatakse esimesele listielemendile klass 'active'
    var i;
$("li").first().addClass('active');
    $("#next").click(function () {
        i = $('.active');

        if (i.is(':last-child')) {
            $('li').first().addClass('active')
            i.removeClass('active')
        } else {
            i.next().addClass('active')
            i.removeClass('active')
        }
        console.log('li')

    });

    $("#prev").click(function () {
        i = $('.active');

        if (i.is(':first-child')) {
            $('li').last().addClass('active')
            i.removeClass('active')
        } else {
            i.prev().addClass('active')
            i.removeClass('active')
        }

    });
};
