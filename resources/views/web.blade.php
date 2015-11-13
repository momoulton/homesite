@extends('layouts.master')

@section('head')
  <link href="/css/listStyle.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
  <h3>Maps, Web Apps, and Programming Projects</h3>
  <table>
    <tr>
      <td><img src="/images/password.png"></td>
      <td><a href="http://p2.momoulton.com" target='_blank'>A Very Literary xkcd Password Generator</a>
       Built with PHP, this app generates pass phrases based on one of four classic 19th century novels.</td>
    </tr>
    <tr>
      <td><img src="/images/sayers_shot.png"></td>
      <td><a href="http://momoulton.github.io/sayers.html" target='_blank'>The World of Dorothy Sayers: A Portrait of an Artist</a> (using D3.js and Google Maps)</td>
    </tr>
    <tr>
      <td><img src="/images/geotextshot.png"></td>
      <td>GeoText Analyzer. Written in Java, this program allows users to analyze a corpus of texts and build lists of words and place-names with frequencies. <a href="GeoText.jar">Download</a> / <a href="https://github.com/momoulton/geotextanalyzer" target='_blank'>Source Code</a>
    </tr>
    <tr>
      <td><img src="/images/mapshot.png"></td>
      <td><a href="http://www.arcgis.com/apps/Viewer/index.html?appid=5389c48e92fc43078ebba3c80488e7d3" target='_blank'>Literature and Empire</a> (using ArcGIS Online)</td>
    </tr>
    <tr>
      <td><img src="/images/netherne.png"></td>
      <td><a href="http://www.arcgis.com/apps/MapTour/index.html?appid=c360ada26930445380d506682b119c91&webmap=8614ff54cc1d4b9da97fb07795b6b308#" target='_blank'>The Road to Netherne.</a> An ArcGIS Online Story Map based on the life of Sarah Hill (1858-1911), as described in Alison Light's <i>Common People: The Story of an English Family</i> (2014)</td>
    </tr>
    <tr>
      <td><img src="/images/refugees.png"></td>
      <td><a href="http://www.arcgis.com/apps/Viewer/index.html?appid=c897fd9ee2f645d9a2825afc18e23d0d" target='_blank'>Refugees from the Anglo-Irish War.</a> An ArcGIS Online map</td>
    </tr>
    <tr>
      <td><img src="/images/radical_tyneside.png"></td>
      <td>Contributor to <a href="http://radicaltyneside.org/">Mapping Radical Tyneside</a>, University of Northumbria</td>
    </tr>
  </table>
@stop

@section('body')

@stop
