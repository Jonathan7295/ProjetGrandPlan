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
        $__internal_1c51431690984d4163b68f14a85d54f03486b8d4a4380b4671e2566292b4378c = $this->env->getExtension("native_profiler");
        $__internal_1c51431690984d4163b68f14a85d54f03486b8d4a4380b4671e2566292b4378c->enter($__internal_1c51431690984d4163b68f14a85d54f03486b8d4a4380b4671e2566292b4378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1c51431690984d4163b68f14a85d54f03486b8d4a4380b4671e2566292b4378c->leave($__internal_1c51431690984d4163b68f14a85d54f03486b8d4a4380b4671e2566292b4378c_prof);

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
