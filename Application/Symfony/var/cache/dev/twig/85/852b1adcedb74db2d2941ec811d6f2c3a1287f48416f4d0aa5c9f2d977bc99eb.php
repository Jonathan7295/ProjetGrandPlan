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
        $__internal_bf84a5e9d071880b31a9593c2646180fb825b891f17beaf5d2b44ed4c9a4468e = $this->env->getExtension("native_profiler");
        $__internal_bf84a5e9d071880b31a9593c2646180fb825b891f17beaf5d2b44ed4c9a4468e->enter($__internal_bf84a5e9d071880b31a9593c2646180fb825b891f17beaf5d2b44ed4c9a4468e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf84a5e9d071880b31a9593c2646180fb825b891f17beaf5d2b44ed4c9a4468e->leave($__internal_bf84a5e9d071880b31a9593c2646180fb825b891f17beaf5d2b44ed4c9a4468e_prof);

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
