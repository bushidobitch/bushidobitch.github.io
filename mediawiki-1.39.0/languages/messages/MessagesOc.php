<?php
/** Occitan (occitan)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @file
 * @ingroup Languages
 *
 * @author Boulaur
 * @author Cedric31
 * @author ChrisPtDe
 * @author Fryed-peach
 * @author Jfblanc
 * @author Kaganer
 * @author McDutchie
 * @author Nemo bis
 * @author Spacebirdy
 * @author Горан Анђелковић
 * @author לערי ריינהארט
 */

$fallback = 'ca, fr';

$bookstoreList = [
	'Amazon.fr' => 'https://www.amazon.fr/exec/obidos/ISBN=$1'
];

$namespaceNames = [
	NS_MEDIA            => 'Mèdia',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discutir',
	NS_USER             => 'Utilizaire',
	NS_USER_TALK        => 'Discussion_Utilizaire',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichièr',
	NS_FILE_TALK        => 'Discussion_Fichièr',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèl',
	NS_TEMPLATE_TALK    => 'Discussion_Modèl',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Discussion_Ajuda',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussion_Categoria',
];

$namespaceAliases = [
	'Utilisator'            => NS_USER,
	'Discussion_Utilisator' => NS_USER_TALK,
	'Discutida_Utilisator' => NS_USER_TALK,
	'Discutida_Imatge'     => NS_FILE_TALK,
	'Mediaòiqui'           => NS_MEDIAWIKI,
	'Discussion_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Modèl'      => NS_TEMPLATE_TALK,
	'Discutida_Ajuda'      => NS_HELP_TALK,
	'Discutida_Categoria'  => NS_CATEGORY_TALK,
	'Imatge'               => NS_FILE,
	'Discussion_Imatge'    => NS_FILE_TALK,
];

$namespaceGenderAliases = [];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Allmessages'               => [ 'Messatge_sistèma', 'Messatge_del_sistèma' ],
	'Allpages'                  => [ 'Totas_las_paginas' ],
	'Ancientpages'              => [ 'Paginas_ancianas' ],
	'Blankpage'                 => [ 'Pagina_blanca', 'PaginaBlanca' ],
	'Block'                     => [ 'Blocar', 'Blocatge' ],
	'BlockList'                 => [ 'Utilizaires_blocats' ],
	'Booksources'               => [ 'Obratge_de_referéncia', 'Obratges_de_referéncia' ],
	'BrokenRedirects'           => [ 'Redireccions_copadas', 'RedireccionsCopadas' ],
	'Categories'                => [ 'Categorias' ],
	'ChangePassword'            => [ 'Reïnicializacion_del_senhal', 'Reinicializaciondelsenhal' ],
	'Confirmemail'              => [ 'Confirmar_lo_corrièr_electronic', 'Confirmarlocorrièrelectronic', 'ConfirmarCorrièrElectronic' ],
	'Contributions'             => [ 'Contribucions' ],
	'CreateAccount'             => [ 'Crear_un_compte', 'CrearUnCompte', 'CrearCompte' ],
	'Deadendpages'              => [ 'Paginas_sul_camin_d\'enlòc' ],
	'DeletedContributions'      => [ 'Contribucions_escafadas', 'ContribucionsEscafadas' ],
	'DoubleRedirects'           => [ 'Redireccions_doblas', 'RedireccionsDoblas' ],
	'Emailuser'                 => [ 'Corrièr_electronic', 'Emèl', 'Emèil' ],
	'Export'                    => [ 'Exportar', 'Exportacion' ],
	'Fewestrevisions'           => [ 'Mens_de_revisions' ],
	'FileDuplicateSearch'       => [ 'Recèrca_fichièr_en_doble', 'RecèrcaFichièrEnDoble' ],
	'Filepath'                  => [ 'Camin_del_Fichièr', 'CamindelFichièr', 'CaminFichièr' ],
	'Import'                    => [ 'Impòrt', 'Importacion' ],
	'Invalidateemail'           => [ 'Invalidar_Corrièr_electronic', 'InvalidarCorrièrElectronic' ],
	'LinkSearch'                => [ 'Recèrca_de_ligams', 'RecèrcaDeLigams' ],
	'Listadmins'                => [ 'Lista_dels_administrators', 'Listadelsadministrators', 'Lista_dels_admins', 'Listadelsadmins', 'Lista_admins', 'Listaadmins' ],
	'Listbots'                  => [ 'Lista_dels_Bòts', 'ListadelsBòts', 'Lista_dels_Bots', 'ListadelsBots' ],
	'Listfiles'                 => [ 'Lista_dels_imatges', 'ListaDelsImatges' ],
	'Listgrouprights'           => [ 'Lista_dels_gropes_utilizaire', 'ListadelsGropesUtilizaire', 'ListaGropesUtilizaire', 'Tièra_dels_gropes_utilizaire', 'TièradelsGropesUtilizaire', 'TièraGropesUtilizaire' ],
	'Listredirects'             => [ 'Lista_de_las_redireccions', 'Listadelasredireccions', 'Lista_dels_redirects', 'Listadelsredirects', 'Lista_redireccions', 'Listaredireccions', 'Lista_redirects', 'Listaredirects' ],
	'Listusers'                 => [ 'Lista_dels_utilizaires', 'ListaDelsUtilizaires' ],
	'Lockdb'                    => [ 'Varrolhar_la_banca' ],
	'Log'                       => [ 'Jornal', 'Jornals' ],
	'Lonelypages'               => [ 'Paginas_orfanèlas' ],
	'Longpages'                 => [ 'Articles_longs' ],
	'MergeHistory'              => [ 'Fusionar_l\'istoric', 'Fusionarlistoric' ],
	'MIMEsearch'                => [ 'Recèrca_MIME' ],
	'Mostcategories'            => [ 'Mai_de_categorias' ],
	'Mostimages'                => [ 'Mai_d\'imatges' ],
	'Mostlinked'                => [ 'Imatges_mai_utilizats' ],
	'Mostlinkedcategories'      => [ 'Categorias_mai_utilizadas', 'CategoriasMaiUtilizadas' ],
	'Mostlinkedtemplates'       => [ 'Modèls_mai_utilizats', 'ModèlsMaiUtilizats' ],
	'Mostrevisions'             => [ 'Mai_de_revisions' ],
	'Movepage'                  => [ 'Tornar_nomenar', 'Cambiament_de_nom' ],
	'Mycontributions'           => [ 'Mas_contribucions', 'Mascontribucions' ],
	'Mypage'                    => [ 'Ma_pagina', 'Mapagina' ],
	'Mytalk'                    => [ 'Mas_discussions', 'Masdiscussions' ],
	'Newimages'                 => [ 'Imatges_novèls', 'ImatgesNovèls' ],
	'Newpages'                  => [ 'Paginas_novèlas' ],
	'Preferences'               => [ 'Preferéncias' ],
	'Prefixindex'               => [ 'Indèx' ],
	'Protectedpages'            => [ 'Paginas_protegidas' ],
	'Protectedtitles'           => [ 'Títols_protegits', 'TítolsProtegits' ],
	'Randompage'                => [ 'Pagina_a_l\'azard' ],
	'Randomredirect'            => [ 'Redireccion_a_l\'azard', 'Redirect_a_l\'azard' ],
	'Recentchanges'             => [ 'Darrièrs_cambiaments', 'DarrièrsCambiaments', 'Darrièras_Modificacions' ],
	'Recentchangeslinked'       => [ 'Seguit_dels_ligams' ],
	'Revisiondelete'            => [ 'Versions_suprimidas' ],
	'Search'                    => [ 'Recèrca', 'Recercar', 'Cercar' ],
	'Shortpages'                => [ 'Articles_brèus' ],
	'Specialpages'              => [ 'Paginas_especialas' ],
	'Statistics'                => [ 'Estatisticas', 'Stats' ],
	'Tags'                      => [ 'Balisas' ],
	'Uncategorizedcategories'   => [ 'Categorias_sens_categoria' ],
	'Uncategorizedimages'       => [ 'Imatges_sens_categoria' ],
	'Uncategorizedpages'        => [ 'Paginas_sens_categoria' ],
	'Uncategorizedtemplates'    => [ 'Modèls_sens_categoria' ],
	'Undelete'                  => [ 'Restablir', 'Restabliment' ],
	'Unlockdb'                  => [ 'Desvarrolhar_la_banca' ],
	'Unusedcategories'          => [ 'Categorias_inutilizadas' ],
	'Unusedimages'              => [ 'Imatges_inutilizats' ],
	'Unusedtemplates'           => [ 'Modèls_inutilizats', 'Modèlsinutilizats', 'Models_inutilizats', 'Modelsinutilizats', 'Modèls_pas_utilizats', 'Modèlspasutilizats', 'Models_pas_utilizats', 'Modelspasutilizats' ],
	'Unwatchedpages'            => [ 'Paginas_pas_seguidas' ],
	'Upload'                    => [ 'Telecargament', 'Telecargaments' ],
	'Userlogin'                 => [ 'Nom_d\'utilizaire' ],
	'Userlogout'                => [ 'Desconnexion' ],
	'Userrights'                => [ 'Dreches', 'Permission' ],
	'Wantedcategories'          => [ 'Categorias_demandadas' ],
	'Wantedfiles'               => [ 'Fichièrs_demandats', 'FichièrsDemandats' ],
	'Wantedpages'               => [ 'Paginas_demandadas' ],
	'Wantedtemplates'           => [ 'Modèls_demandats', 'ModèlsDemandats' ],
	'Watchlist'                 => [ 'Lista_de_seguit', 'ListraDeSeguit', 'Seguit', 'Lista_de_seguiment', 'ListraDeSeguiment', 'Seguiment' ],
	'Whatlinkshere'             => [ 'Paginas_ligadas' ],
	'Withoutinterwiki'          => [ 'Sens_interwiki', 'Sensinterwiki', 'Sens_interwikis', 'Sensinterwikis' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'ENCÒDAANCÒRA', 'ANCHORENCODE' ],
	'basepagename'              => [ '1', 'NOMBASADEPAGINA', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NOMBASADEPAGINAX', 'BASEPAGENAMEE' ],
	'contentlanguage'           => [ '1', 'LENGACONTENGUT', 'LENGCONTENGUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'JORNCORRENT', 'JORNACTUAL', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'JORNCORRENT2', 'JORNACTUAL2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NOMJORNCORRENT', 'NOMJORNACTUAL', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'JDSCORRENT', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'ORACORRENTA', 'ORAACTUALA', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'MESCORRENT', 'MESACTUAL', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthabbrev'        => [ '1', 'ABREVMESCORRENT', 'ABREVMESACTUAL', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'NOMMESCORRENT', 'NOMMESACTUAL', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NOMGENMESCORRENT', 'NOMGENMESACTUAL', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'DATACORRENTA', 'DATAACTUALA', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'INSTANTACTUAL', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'VERSIONACTUALA', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'SETMANACORRENTA', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ANNADACORRENTA', 'ANNADAACTUALA', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'ORDENA:', 'CLAUDETRIADA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'directionmark'             => [ '1', 'MARCADIRECCION', 'MARCADIR', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'AFICHARTÍTOL', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'CAMIN:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__FORÇARTAULA__', '__FORÇARSOMARI__', '__FORÇARTDM__', '__FORCETOC__' ],
	'formatnum'                 => [ '0', 'FORMATNOMBRE', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'NOMPAGINACOMPLET', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'NOMPAGINACOMPLETX', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'URLCOMPLETA:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLCOMPLETAX:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'GENRE:', 'GENDER:' ],
	'grammar'                   => [ '0', 'GRAMATICA:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__CATAMAGADA__', '__HIDDENCAT__' ],
	'img_baseline'              => [ '1', 'linha_de_basa', 'baseline' ],
	'img_border'                => [ '1', 'bordadura', 'border' ],
	'img_bottom'                => [ '1', 'bas', 'bottom' ],
	'img_center'                => [ '1', 'centrat', 'center', 'centre' ],
	'img_framed'                => [ '1', 'quadre', 'enquagrat', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'sens_quadre', 'frameless' ],
	'img_left'                  => [ '1', 'esquèrra', 'senèstra', 'gaucha', 'left' ],
	'img_link'                  => [ '1', 'ligam=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'vinheta=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'mitan', 'middle' ],
	'img_none'                  => [ '1', 'neant', 'nonrés', 'none' ],
	'img_right'                 => [ '1', 'drecha', 'dreta', 'right' ],
	'img_sub'                   => [ '1', 'indici', 'ind', 'sub' ],
	'img_super'                 => [ '1', 'exp', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'bas-tèxte', 'bas-txt', 'text-bottom' ],
	'img_text_top'              => [ '1', 'naut-tèxte', 'naut-txt', 'text-top' ],
	'img_thumbnail'             => [ '1', 'vinheta', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'naut', 'top' ],
	'img_upright'               => [ '1', 'redreça', 'redreça$1', 'redreça $1', 'upright', 'upright=$1', 'upright $1' ],
	'language'                  => [ '0', '#LENGA:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'MINUS:', 'LC:' ],
	'lcfirst'                   => [ '0', 'INITMINUS:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'JORNLOCAL', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'JORNLOCAL2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NOMJORNLOCAL', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'JDSLOCAL', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'ORALOCALA', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonthabbrev'          => [ '1', 'ABREVMESLOCAL', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'NOMMESLOCAL', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NOMGENMESLOCAL', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'ORARILOCAL', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'URLLOCALA:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOCALAX:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'SETMANALOCALA', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ANNADALOCALA', 'LOCALYEAR' ],
	'namespace'                 => [ '1', 'ESPACINOMENATGE', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ESPACINOMENATGEX', 'NAMESPACEE' ],
	'newsectionlink'            => [ '1', '__LIGAMSECCIONNOVÈLA__', '__NEWSECTIONLINK__' ],
	'noeditsection'             => [ '0', '__SECCIONNONEDITABLA__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__CAPDEGALARIÁ__', '__CAPDEGALARIA__', '__PASCAPDEDEGALARIÁ__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__PASCAPDINDÈX__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__PASCAPDELIGAMSECCIONNOVÈLA__', '__NONEWSECTIONLINK__' ],
	'notoc'                     => [ '0', '__CAPDETAULA__', '__PASCAPDESOMARI__', '__PASCAPDETDM__', '__NOTOC__' ],
	'ns'                        => [ '0', 'ESPACEN:', 'NS:' ],
	'numberofactiveusers'       => [ '1', 'NOMBREUTILIZAIRESACTIUS', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'NOMBREEDICIONS', 'NOMBREMODIFS', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'NOMBREFICHIÈRS', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'NOMBREPAGINAS', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'NOMBREUTILIZAIRES', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'BORRATGEESQUÈRRA', 'PADLEFT' ],
	'padright'                  => [ '0', 'BORRATGEDRECHA', 'PADRIGHT' ],
	'pagename'                  => [ '1', 'NOMPAGINA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NOMPAGINAX', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'PAGINASDINSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesinnamespace'          => [ '1', 'PAGINASDINSESPACI:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'TALHAPAGINA', 'PAGESIZE' ],
	'protectionlevel'           => [ '1', 'NIVÈLDEPROTECCION', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'LINHA:', 'BRUT:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'BRUT', 'B', 'R' ],
	'redirect'                  => [ '0', '#REDIRECCION', '#REDIRECT' ],
	'revisionday'               => [ '1', 'DATAVERSION', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'DATAVERSION2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'NUMÈROVERSION', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'MESREVISION', 'REVISIONMONTH' ],
	'revisiontimestamp'         => [ '1', 'ORAREVISION', 'REVISIONTIMESTAMP' ],
	'revisionyear'              => [ '1', 'ANNADAREVISION', 'ANREVISION', 'REVISIONYEAR' ],
	'scriptpath'                => [ '0', 'CAMINESCRIPT', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'SERVIDOR', 'SERVER' ],
	'servername'                => [ '0', 'NOMSERVIDOR', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'NOMSIT', 'NOMSITE_NOMSITI', 'SITENAME' ],
	'special'                   => [ '0', 'especial', 'special' ],
	'staticredirect'            => [ '1', '__REDIRECCIONESTATICA__', '__STATICREDIRECT__' ],
	'subjectpagename'           => [ '1', 'NOMPAGINASUBJECTE', 'NOMPAGINASUBJÈCTE', 'NOMPAGINAARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NOMPAGINASUBJECTEX', 'NOMPAGINASUBJÈCTEX', 'NOMPAGINAARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'ESPACISUBJECTE', 'ESPACISUBJÈCTE', 'ESPACIARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ESPACISUBJECTEX', 'ESPACISUBJÈCTEX', 'ESPACIARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'NOMSOSPAGINA', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NOMSOSPAGINAX', 'SUBPAGENAMEE' ],
	'tag'                       => [ '0', 'balisa', 'tag' ],
	'talkpagename'              => [ '1', 'NOMPAGINADISCUSSION', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NOMPAGINADISCUSSIONX', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'ESPACIDISCUSSION', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ESPACIDISCUSSIONX', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__TAULA__', '__SOMARI__', '__TDM__', '__TOC__' ],
	'uc'                        => [ '0', 'MAJUS:', 'CAPIT:', 'UC:' ],
	'ucfirst'                   => [ '0', 'INITMAJUS:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'ENCÒDAURL:', 'URLENCODE:' ],
];

$datePreferences = [
	'default',
	'oc normal',
	'ISO 8601',
];

$defaultDateFormat = 'oc normal';

$dateFormats = [
	'oc normal time' => 'H.i',
	'oc normal date' => 'j F "de" Y',
	'oc normal both' => 'j F "de" Y "a" H.i',
];

$separatorTransformTable = [ ',' => "\u{00A0}", '.' => ',' ];

$linkTrail = "/^([a-zàâçéèêîôû]+)(.*)$/sDu";
