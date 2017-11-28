<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}


?>

 
<a ng-if="item.items.length == 0 && !item.scriptedItems" ng-href="{{item.href}}">{{ item.label }}</a>
<a ng-if="item.items.length > 0" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ item.label }} <span class="caret"></span></a>
<ul ng-if="item.items.length > 0" class="dropdown-menu" role="menu">
    <li ng-repeat="item in item.items" ng-include="'menuTemplate'" />
</ul>
<a  ng-if="item.scriptedItems.count >= 0" href="javascript:void(0)" data-toggle="dropdown" title="{{item.hint}}">
  <span ng-bind-html="item.label"></span>
    <span ng-if="!item.scriptedItems.omitBadge" class="label label-as-badge label-primary sp-navbar-badge-count">{{item.scriptedItems.count}}</span>
</a>
<sp-dropdown-tree ng-if="item.scriptedItems.count > 0" items="item.scriptedItems.items" />