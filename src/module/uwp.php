<?php
namespace app\modules;

use std, gui, framework, app;


class uwp extends AbstractModule
{
    //OLD
    function oldAddCardEffect($object) {
        $cardShadowEffect = new DropShadowEffectBehaviour();
        $cardShadowEffect->radius = 15;
        $cardShadowEffect->color = "#00000030";
        $cardShadowEffect->offsetY = 4;
        $cardShadowEffect->apply($object);
        
        $object->borderRadius = 2;
        $object->borderWidth = 0;
        $object->borderColor = 'transparent';
        //$object->borderWidth = 1;
        //$object->borderColor = '#cccccc';
        $object->titleColor = "black";
        $object->titleFont = UXFont::of('Segoe UI', 14);
    }
    
    //NEW
    function uwpPasswordField($id, $width, $position)
    {
        $newPasswordField = new UXPasswordField;
        $newPasswordField->id = $id;
        $newPasswordField->size = [$width, 32];
        $newPasswordField->position = $position;
        $newPasswordField->classes->add('uwp-text-field');
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$width);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newPasswordField->classesString);
        
        return $newPasswordField;
    }
    
    function uwpTextField($id, $width, $position)
    {
        $newTextField = new UXTextField;
        $newTextField->id = $id;
        $newTextField->size = [$width, 32];
        $newTextField->position = $position;
        $newTextField->classes->add('uwp-text-field');
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$width);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newTextField->classesString);
        
        return $newTextField;
    }
    
    function uwpButton($id, $width, $position, $animation)
    {
        $newButton = new UXFlatButton;
        $newButton->id = $id;
        $newButton->size = [$width, 32];
        $newButton->position = $position;
        $newButton->classes->add('uwp-button');
        $newButton->textAlignment = 'CENTER';
        $newButton->alignment = 'CENTER'; 
        
        if ($animation) {
            $scaleButtonEffect = new ScaleAnimationBehaviour();
            $scaleButtonEffect->scale = 0.97;
            $scaleButtonEffect->duration = 100;
            $scaleButtonEffect->when = 'CLICK';
            $scaleButtonEffect->apply($newButton);
        }
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$width);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."ANIMATION::".$animation);
        var_dump("  "."CLASSES::".$newButton->classesString);
        
        return $newButton;
    }
    
    function uwpCheckBox($id, $width, $position)
    {
        $newCheckBox = new UXCheckbox;
        $newCheckBox->id = $id;
        $newCheckBox->size = [$width, 20];
        $newCheckBox->position = $position;
        $newCheckBox->classes->add('uwp-check-box');
        $newCheckBox->textAlignment = 'LEFT';
        $newCheckBox->alignment = 'CENTER_LEFT'; 
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$width);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newCheckBox->classesString);
        
        return $newCheckBox;
    }
    
    function uwpCardPanel($id, $size, $position, $shadow)
    {
        $newPanel = new UXPanel;
        $newPanel->id = $id;
        $newPanel->size = $size;
        $newPanel->position = $position;
        $newPanel->classes->add('uwp-card')
        $newPanel->borderRadius = 2;
        $newPanel->borderWidth = 0;
        //$newPanel->borderWidth = 1;
        //$newPanel->borderColor = '#cccccc';
        $newPanel->titleOffset = 0;
        $newPanel->titleColor = "black";
        $newPanel->titleFont = UXFont::of('Segoe UI', 14);   
             
        if ($shadow) {
            $cardShadowEffect = new DropShadowEffectBehaviour();
            $cardShadowEffect->radius = 15;
            $cardShadowEffect->color = "#00000030";
            $cardShadowEffect->offsetY = 4;
            $cardShadowEffect->apply($newPanel);
        }
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$size[0].", HEIGHT::".$size[1]);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."SHADOW::".$shadow);
        var_dump("  "."CLASSES::".$newPanel->classesString);
        
        return $newPanel;
    }
    
    function uwpVBox($id, $size, $position)
    {
        $newVbox = new UXVBox;
        $newVbox->id = $id;
        $newVbox->size = $size;
        $newVbox->position = $position;
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$size[0].", HEIGHT::".$size[1]);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newVbox->classesString);
        
        return $newVbox;
    }
    
    function uwpHBox($id, $size, $position)
    {
        $newHbox = new UXHBox;
        $newHbox->id = $id;
        $newHbox->size = $size;
        $newHbox->position = $position;
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$size[0].", HEIGHT::".$size[1]);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newHbox->classesString);
        
        return $newHbox;
    }
    
    function uwpToggleButton($id, $width, $position)
    {
        $newToggleButton = new UXToggleButton;
        $newToggleButton->id = $id;
        $newToggleButton->size = [$width, 32];
        $newToggleButton->position = $position;
        $newToggleButton->classes->add('uwp-toggle-button');
        
        //DEBUG
        var_dump("ID::".$id);
        var_dump("  "."WIDTH::".$width);
        var_dump("  "."X::".$position[0].", Y::".$position[1]);
        var_dump("  "."CLASSES::".$newToggleButton->classesString);
        
        return $newToggleButton;
    }
    
    function uwpSideBar($foldingButton, $searchField)
    {
        $newBarBody = new UXPanel;
        $newBarBody->id = '_barBody';
        $newBarBody->size = [300, 50];
        $newBarBody->position = [0, 0];
        $newBarBody->backgroundColor = '#f2f2f2';
        $newBarBody->borderWidth = 0;
        $newBarBody->topAnchor = true;
        $newBarBody->bottomAnchor = true;
        
            /* $timer = new TimerScript();
            $timer->interval = 90;
            $timer->autoStart = true;
            $timer->repeatable = true;
            
            $timer->on('action', function() {
                $this->_barBody->size = [300, $this->height + 100];
                    
                $this->_barContainer->size = [300, $this->height - $this->_barContainer->y -39];
            }); */
        
        if ($foldingButton) {
            $newFoldingButton = new UXFlatButton;
            $newFoldingButton->id = '_foldingButton';
            $newFoldingButton->size = [36, 36];
            $newFoldingButton->position = [0, 0];
            $newFoldingButton->classes->add('uwp-icon-button-small');
            $newFoldingButton->text = '';
            $newFoldingButton->focusTraversable = false;
            $newFoldingButton->graphicTextGap = 0;
            $newFoldingButton->textAlignment = 'CENTER';
            $newFoldingButton->alignment = 'CENTER';
            
            $newBarBody->add($newFoldingButton);
        }
        
        if ($searchField) {
            $newSearchField = new UXTextField;
            $newSearchField->id = '_searchField';
            $newSearchField->size = [280, 30];
            if ($foldingButton) {
                $newSearchField->position = [10, 41];
            } else {
                $newSearchField->position = [10, 5];
            }
            $newSearchField->classes->add('uwp-search-field');
            $newSearchField->focusTraversable = false;
            $newSearchField->promptText = 'Search';
            
            $newSearchButton = new UXFlatButton;
            $newSearchButton->id = '_searchButton';
            $newSearchButton->size = [30, 30];
            $newSearchButton->position = [$newSearchField->x + $newSearchField->width - $newSearchButton->width, $newSearchField->y];  
            $newSearchButton->classes->add('uwp-search-button');
            $newSearchButton->text = '';
            $newSearchButton->graphicTextGap = 0;
            $newSearchButton->textAlignment = 'CENTER';
            $newSearchButton->alignment = 'CENTER';
            $newSearchButton->focusTraversable = false;
            
            $newBarBody->add($newSearchField); $newBarBody->add($newSearchButton);
        }
        
        $newBarContainer = new UXScrollPane;
        $newBarContainer->id = '_barContainer';
        $newBarContainer->size = [300, 150];
        $newBarContainer->style = '-fx-background: #f2f2f2;';
        $newBarContainer->hbarPolicy = 'NEVER';
        
            if ($foldingButton == true and $searchField == false) {
                $newBarContainer->position = [0, 36];
                
            } elseif ($searchField == true and $foldingButton == false) {
                $newBarContainer->position = [0, 41];
                
            } elseif ($foldingButton == true and $searchField == true) {
                $newBarContainer->position = [0, 76];
                
            } else {
                $newBarContainer->position = [0, 5];
                
            }
            
        $newBarContainer->content = new UXVBox;
        $newBarBody->add($newBarContainer);
        
        // $timer->start();
        return $newBarBody;
    }
    
    function uwpSideBarItem($itemIcon, $itemName)
    {
        static $id;
        $newSideBarButton = new UXPanel;
        $newSideBarButton->id = '_barButton'.$id;
            $id++;
        $newSideBarButton->size = [300, 36];
        $newSideBarButton->borderWidth = 0;
        $newSideBarButton->classes->add('uwp-bar-panel');
        
        $newSideBarIcon = new UXLabel;
        $newSideBarIcon->text = $itemIcon;
        $newSideBarIcon->position = [0, 0];
        $newSideBarIcon->textAlignment = 'CENTER';
        $newSideBarIcon->alignment = 'CENTER';   
        $newSideBarIcon->size = [36, 36];
        $newSideBarIcon->graphicTextGap = 0;
        $newSideBarIcon->classes->add('uwp-bar-icon');
        
        $newSideBarText = new UXLabel;
        $newSideBarText->text = $itemName;
        $newSideBarText->size = [200, 36];
        $newSideBarText->position = [36 + 5, 0];
        $newSideBarText->graphicTextGap = 0;
        $newSideBarText->classes->add('uwp-bar-text');
        $newSideBarText->textAlignment = 'LEFT';
        $newSideBarText->alignment = 'CENTER_LEFT'; 
        
        $newSideBarButton->add($newSideBarIcon);
        $newSideBarButton->add($newSideBarText);  
        
        $this->_barContainer->content->add($newSideBarButton); 
    }
    
    
}