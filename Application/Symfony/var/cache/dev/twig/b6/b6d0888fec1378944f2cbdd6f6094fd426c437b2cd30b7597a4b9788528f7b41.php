<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9115252356319994d893f4e2d2015f714d4e4179f13347813f6a886be4ed5919 extends Twig_Template
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
        $__internal_563d0a4b782afad0739f2b9212fd330c4af7e6790e38d8778301c40c1be9467a = $this->env->getExtension("native_profiler");
        $__internal_563d0a4b782afad0739f2b9212fd330c4af7e6790e38d8778301c40c1be9467a->enter($__internal_563d0a4b782afad0739f2b9212fd330c4af7e6790e38d8778301c40c1be9467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_563d0a4b782afad0739f2b9212fd330c4af7e6790e38d8778301c40c1be9467a->leave($__internal_563d0a4b782afad0739f2b9212fd330c4af7e6790e38d8778301c40c1be9467a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
