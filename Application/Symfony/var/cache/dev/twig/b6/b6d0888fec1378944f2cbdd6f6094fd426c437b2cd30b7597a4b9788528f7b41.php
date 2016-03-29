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
        $__internal_f11b412ddb23f1fdaf343b7c67fe146f2fc7de7f124f15ebaad62d1e7e68109c = $this->env->getExtension("native_profiler");
        $__internal_f11b412ddb23f1fdaf343b7c67fe146f2fc7de7f124f15ebaad62d1e7e68109c->enter($__internal_f11b412ddb23f1fdaf343b7c67fe146f2fc7de7f124f15ebaad62d1e7e68109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f11b412ddb23f1fdaf343b7c67fe146f2fc7de7f124f15ebaad62d1e7e68109c->leave($__internal_f11b412ddb23f1fdaf343b7c67fe146f2fc7de7f124f15ebaad62d1e7e68109c_prof);

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
