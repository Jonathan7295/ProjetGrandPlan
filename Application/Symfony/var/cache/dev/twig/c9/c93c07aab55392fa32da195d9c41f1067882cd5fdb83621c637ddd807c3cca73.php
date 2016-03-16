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
        $__internal_53c5a5d7ec8d4bbd4afba515e93d554ab2eb9089ae2593848bccccf9181a23c2 = $this->env->getExtension("native_profiler");
        $__internal_53c5a5d7ec8d4bbd4afba515e93d554ab2eb9089ae2593848bccccf9181a23c2->enter($__internal_53c5a5d7ec8d4bbd4afba515e93d554ab2eb9089ae2593848bccccf9181a23c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_53c5a5d7ec8d4bbd4afba515e93d554ab2eb9089ae2593848bccccf9181a23c2->leave($__internal_53c5a5d7ec8d4bbd4afba515e93d554ab2eb9089ae2593848bccccf9181a23c2_prof);

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
