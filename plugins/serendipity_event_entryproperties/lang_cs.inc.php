<?php # $Id: lang_cs.inc.php 1381 2007-12-13 12:44:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Roz���en� vlastnosti p��sp�vk�');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', 'cachov�n�, neve�ejn� p��sp�vky, st�l� (p�ilepen�) p��sp�vky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Ozna� tento p��sp�vek jako st�l� (p�ilepen�)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'P��sp�vky mohou b�t p�e�teny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Spoluautory');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'K�mkoliv');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Povolit cachov�n� p��sp�vk�?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Pokud je povoleno, p�i ka�d�m ulo�en� p��sp�vku bude vytvo�ena cachovan� verze. To znamen�, �e p�i ka�d�m na�ten� str�nky nebude p��sp�vek sestavov�n od za��tku znovu, ale vezme se p�edgenerovan� (cachovan�) verze. Cachov�n� zv��� v�kon blogu, ale m��e omezit funkci ostatn�ch plugin�.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Cachovat p��sp�vky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Na��t�n� dal�� d�vky p��sp�vk�...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Na��t�n� p��sp�vk� %d a� %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Vytv��en� cachovan� verze pro p��sp�vek #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'P��sp�vek cachov�n.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Cachov�n� p��sp�vk� hotovo.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Cachov�n� p��sp�vku ZRU�ENO.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (z celkov�ho po�tu %d p��sp�vk�)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Skr�t v p�ehledu �l�nk� / na hlavn� str�nce');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Pou��t omezen� pro skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Pokud je povoleno, m��ete zadat, kter� skupiny u�ivatel� sm� ��st �l�nek. Tato volba m� velk� vliv na rychlost vytv��en� str�nky s p�ehledem �l�nk�. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu vyu�ijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Pou��t omezen� pro u�ivatele');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Pokud je povoleno, m��ete zadat, kte�� u�ivatel� sm� ��st �l�nek. Tato volba m� velk� vliv na rychlost vytv��en� str�nky s p�ehledem �l�nk�. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu vyu�ijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Skr�t obsah v RSS kan�lu');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Pokud je povoleno, obsah p��sp�vku se nebude zobrazovat v RSS kan�lu/kan�lech.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Vlastn� pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'P��davn� vlastn� pole mohou b�t pou�ita ve Va�� vlastn� �ablon� v m�stech, kde chcete zobrazovat data z t�chto pol�. Pro tuto funkci mus�te editovat �ablonu "entries.tpl" a v n� um�stit Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred kazdym nazvem pole musi byt predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Zde m��ete zadat seznam pol�, kter� chcete pou��t u sv�ch p��sp�vk�, odd�len�ch ��rkou. Pro jm�na pol� nepou��vejte speci�ln� znaky ani diakritiku. P��klad: "MojePole1, CiziPole2, UplneCiziPole3". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Seznam dostupn�ch voliteln�ch pol� m��e b�t zm�n�n v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguraci pluginu</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Zaka� pou�it� vybran�ch zna�kovac�ch plugin� pro tento p��sp�vek:');
?>