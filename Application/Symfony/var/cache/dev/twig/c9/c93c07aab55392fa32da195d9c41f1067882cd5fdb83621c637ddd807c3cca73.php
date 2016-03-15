<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cebc2b7a1c426d64ef8225b8cff4006539ca11a843bd0667669b746fda0f340f extends Twig_Template
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
        $__internal_bfa9893b03fe69041708842891c19b38a0397d34abf7ae3e1d125630545b7acb = $this->env->getExtension("native_profiler");
        $__internal_bfa9893b03fe69041708842891c19b38a0397d34abf7ae3e1d125630545b7acb->enter($__internal_bfa9893b03fe69041708842891c19b38a0397d34abf7ae3e1d125630545b7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bfa9893b03fe69041708842891c19b38a0397d34abf7ae3e1d125630545b7acb->leave($__internal_bfa9893b03fe69041708842891c19b38a0397d34abf7ae3e1d125630545b7acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
