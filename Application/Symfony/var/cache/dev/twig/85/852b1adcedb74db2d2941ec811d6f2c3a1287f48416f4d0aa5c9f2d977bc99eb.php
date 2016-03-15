<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_78f845e561dd31236d991f0e0f964f6b5daf137d22feddd2332b201c370d634b extends Twig_Template
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
        $__internal_aeafa10286be8284a5fed132c2e4d030b7c58330fa3745f82851b3a4dbde6304 = $this->env->getExtension("native_profiler");
        $__internal_aeafa10286be8284a5fed132c2e4d030b7c58330fa3745f82851b3a4dbde6304->enter($__internal_aeafa10286be8284a5fed132c2e4d030b7c58330fa3745f82851b3a4dbde6304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_aeafa10286be8284a5fed132c2e4d030b7c58330fa3745f82851b3a4dbde6304->leave($__internal_aeafa10286be8284a5fed132c2e4d030b7c58330fa3745f82851b3a4dbde6304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
