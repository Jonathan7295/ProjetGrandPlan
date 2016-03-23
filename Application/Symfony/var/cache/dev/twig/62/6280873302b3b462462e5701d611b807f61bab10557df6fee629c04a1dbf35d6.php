<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec2a8a4cb85f96622ec25ced3d1f3ec0e419dd67bafa4e5962b4b0212b0ad292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8853f3d98db24d0f5f0fea6816ccb04d07a7c0379bf6c6cfa970cb0e1a87a39 = $this->env->getExtension("native_profiler");
        $__internal_e8853f3d98db24d0f5f0fea6816ccb04d07a7c0379bf6c6cfa970cb0e1a87a39->enter($__internal_e8853f3d98db24d0f5f0fea6816ccb04d07a7c0379bf6c6cfa970cb0e1a87a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e8853f3d98db24d0f5f0fea6816ccb04d07a7c0379bf6c6cfa970cb0e1a87a39->leave($__internal_e8853f3d98db24d0f5f0fea6816ccb04d07a7c0379bf6c6cfa970cb0e1a87a39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
