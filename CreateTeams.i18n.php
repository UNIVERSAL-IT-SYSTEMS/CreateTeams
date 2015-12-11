<?php
/**
 * Internationalisation for myextension
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();
 
/** English
 * @author hainrich, Chapatiyaq
 */
$messages[ 'en' ] = array(
	'createteams' => 'Team templates', // Important! This is the string that appears on Special:SpecialPages
	'createteams-desc' => 'Allows users to [[Special:CreateTeams|create team templates]]. Original version by hainrich.',
	
	'createteams-templates.json' => '{"templates":{"Team":{"wikitext": "[[File:{$image$}|link={$link$}]] {$namewithlink$}","category": "Team Template Standard"},"TeamShort":{"wikitext": "[[File:{$image$}|link={$link$}]] [[{$link$}|{$shortname$}]]","category": "Team Template Short"},"Team2":{"wikitext": "{$namewithlink$} [[File:{$image$}|link={$link$}]]","category": "Team2 Template Standard"},"Team2Short":{"wikitext": "[[{$link$}|{$shortname$}]] [[File:{$image$}|link={$link$}]]","category": "Team2 Template Short"},"TeamBracket":{"wikitext": "[[File:{$image$}|link={$link$}|x18px]] <span style=\\"vertical-align:-1px;\\">{$name$}</span>","category": "Team Template Bracket"},"TeamIcon":{"wikitext": "[[File:{$image$}|link={$link$}]]","category": "Team Template Icons"},"TeamPart":{"wikitext": "<div style=\\"float:right;\\">[[File:{$image$}|link={$link$}]]</div>","category": "Team Template Participants"}}}',
	
	'createteams-create-teams-heading' => 'Create team templates',
	'createteams-create-redirects-heading' => 'Create redirects',
	'createteams-delete-teams-heading' => 'Delete team templates',
	'createteams-preview-heading' => 'Preview',
	'createteams-report-heading' => 'Report',
	'createteams-delete-teams-confirm-deletion-heading' => 'Confirm deletion',

	'createteams-create-teams-desc' => 'Creates team templates as seen [[Liquipedia:Team templates|here]] for a specific team. If no image link is entered, then the image is supposed to be "Teamlogo std.png".',
	'createteams-create-teams-team-label' => 'Team name: ',
	'createteams-create-teams-team-helper' => 'e.g. "Team Liquid"',
	'createteams-create-teams-pagetitle-label' => 'Team page title: ',
	'createteams-create-teams-pagetitle-helper' => '(Optional) e.g. "Team Liquid Alternate Page"<br>If not empty, then the links will go to this page. Leave empty if the page title is the same as the team name.',
	'createteams-create-teams-teamshort-label' => 'Team short name: ',
	'createteams-create-teams-teamshort-helper' => 'e.g. "TL" or "Liquid`"',
	'createteams-create-teams-image-label' => 'Image: ',
	'createteams-create-teams-image-helper' => 'e.g. "[[:File:Liquidlogo std.png|Liquidlogo std.png]]"<br>The name of the team logo file. Dimensions must be 60px x 25px. To upload an image, use [[Special:Upload]].',
	'createteams-create-teams-overwrite-label' => 'Overwrite if already existing: ',
	'createteams-create-teams-overwrite-helper' => 'If checked, then the templates will be overwritten if they already exist.',
	'createteams-create-teams-create-button' => 'Create',
	'createteams-create-teams-preview-button' => 'Preview',
	'createteams-create-teams-error-team-name-empty' => 'Team name is empty. Please enter a team name.',
	'createteams-create-teams-error-team-name-url' => 'It looks like the team name includes an URL. Please enter a clean team name.',
	'createteams-create-teams-error-image-not-found' => 'Image does not exist. Please upload the team logo first.',
	
	'createteams-create-summary-edit' => 'Edit by [[Special:CreateTeams]]',
	'createteams-create-summary-creation' => 'Creation by [[Special:CreateTeams]]',
	'createteams-create-error-permission' => 'Permission denied to edit/create [[$1]].',
	'createteams-create-log-edit-success' => '[[$1]] edited successfully.',
	'createteams-create-error-edit' => 'Error while editing [[$1]]: ',
	'createteams-create-error-edit-already-exists' => '[[$1]] already exists and was not created.',
	'createteams-create-log-create-success' => '[[$1]] created successfully.',
	'createteams-create-error-create' => 'Error while creating [[$1]]: ',

	'createteams-create-teams-report-success' => 'Templates for team $1 created/edited!',

	'createteams-create-redirects-redirect-label' => 'Redirect: ',
	'createteams-create-redirects-redirect-helper' => 'e.g. "tl" or "liquid"',
	'createteams-create-redirects-redirectteam-label' => 'to team: ',
	'createteams-create-redirects-redirectteam-helper' => 'e.g. "team liquid"',
	'createteams-create-redirects-redirectoverwrite-label' => 'Overwrite if already existing: ',
	'createteams-create-redirects-redirectoverwrite-helper' => 'If checked, then the templates will be overwritten if they already exist.',
	'createteams-create-redirects-create-button' => 'Create redirects',
	'createteams-create-redirects-preview-button' => 'Preview',
	'createteams-create-redirects-error-source-or-destination-empty' => 'Please provide the source and destination of the redirect you want to create.',
	'createteams-create-redirects-report-success' => 'Redirects from: $1 to $2 created/edited!',
	'createteams-delete-teams-delete-button' => 'Delete',
	'createteams-delete-teams-preview-button' => 'Preview',

	'createteams-delete-teams-deletepreviewteam-label' => 'Delete team: ',
	'createteams-delete-teams-deletepreviewteam-helper' => 'e.g. "team solid"',
	'createteams-delete-teams-deletebutton-helper' => 'Preview is required before deletion.',
	'createteams-delete-teams-error-team-name-empty' => 'Please provide the name of the team.',
	'createteams-delete-summary-deletion' => 'Deletion by [[Special:CreateTeams]]',
	'createteams-delete-log-deletion-success' => '[[$1]] deleted successfully.',
	'createteams-delete-error-deletion' => 'Error while deleting [[$1]].',
	'createteams-delete-error-permission' => 'Permission denied to delete [[$1]].',
	'createteams-delete-error-does-not-exist' => '[[$1]] does not exist.',
	'createteams-delete-teams-report-success' => 'Templates for team $1 deleted!',
	'createteams-delete-teams-preview-deletion' => '[[$1]] will be deleted.',
	'createteams-delete-teams-warning-deletion' => 'WARNING: If you click on "Delete", the team deleted will be the team on the left of the button, not the team above.'

);
 
/** Message documentation
 * @author hainrich, Chapatiyaq
 */
$messages[ 'qqq' ] = array(
	'createteams' => "Team templates",
	'createteams-desc' => "{{desc}}",
);