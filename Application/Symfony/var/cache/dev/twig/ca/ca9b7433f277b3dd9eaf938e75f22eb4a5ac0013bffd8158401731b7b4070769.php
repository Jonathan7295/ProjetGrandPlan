<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b52e1244abd8dd8a5a71fa1ef158bee50053d82cda0170d5796a3fd7e924b01b extends Twig_Template
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
        $__internal_c92968016a1a5087b3cf73fd66e0c8d39315536991a86632fa40352bfb887ef9 = $this->env->getExtension("native_profiler");
        $__internal_c92968016a1a5087b3cf73fd66e0c8d39315536991a86632fa40352bfb887ef9->enter($__internal_c92968016a1a5087b3cf73fd66e0c8d39315536991a86632fa40352bfb887ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c92968016a1a5087b3cf73fd66e0c8d39315536991a86632fa40352bfb887ef9->leave($__internal_c92968016a1a5087b3cf73fd66e0c8d39315536991a86632fa40352bfb887ef9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
