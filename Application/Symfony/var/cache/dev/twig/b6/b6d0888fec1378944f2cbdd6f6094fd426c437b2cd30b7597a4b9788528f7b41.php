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
        $__internal_b5511748c16950db67ec7b42d0e4fbba241d91401f83d528ba2c52175c7ea47b = $this->env->getExtension("native_profiler");
        $__internal_b5511748c16950db67ec7b42d0e4fbba241d91401f83d528ba2c52175c7ea47b->enter($__internal_b5511748c16950db67ec7b42d0e4fbba241d91401f83d528ba2c52175c7ea47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b5511748c16950db67ec7b42d0e4fbba241d91401f83d528ba2c52175c7ea47b->leave($__internal_b5511748c16950db67ec7b42d0e4fbba241d91401f83d528ba2c52175c7ea47b_prof);

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
