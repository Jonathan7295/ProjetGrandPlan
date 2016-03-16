<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9ce1e206195966a7865eef11465a270fb90298021655f215be3e635a075d52b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5e177ff74de93d2f66bd39b5543978be0fa4dc6e6f5a14e57f44d5541a6fc48 = $this->env->getExtension("native_profiler");
        $__internal_d5e177ff74de93d2f66bd39b5543978be0fa4dc6e6f5a14e57f44d5541a6fc48->enter($__internal_d5e177ff74de93d2f66bd39b5543978be0fa4dc6e6f5a14e57f44d5541a6fc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d5e177ff74de93d2f66bd39b5543978be0fa4dc6e6f5a14e57f44d5541a6fc48->leave($__internal_d5e177ff74de93d2f66bd39b5543978be0fa4dc6e6f5a14e57f44d5541a6fc48_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73225630417790794a7b7d2d1fff2fbf38692ff90a789a95635fc64f835a4665 = $this->env->getExtension("native_profiler");
        $__internal_73225630417790794a7b7d2d1fff2fbf38692ff90a789a95635fc64f835a4665->enter($__internal_73225630417790794a7b7d2d1fff2fbf38692ff90a789a95635fc64f835a4665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73225630417790794a7b7d2d1fff2fbf38692ff90a789a95635fc64f835a4665->leave($__internal_73225630417790794a7b7d2d1fff2fbf38692ff90a789a95635fc64f835a4665_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d58c8aa21d7ea89bc829434986fc2497c9185b66509f7d593d2317b8c10da41a = $this->env->getExtension("native_profiler");
        $__internal_d58c8aa21d7ea89bc829434986fc2497c9185b66509f7d593d2317b8c10da41a->enter($__internal_d58c8aa21d7ea89bc829434986fc2497c9185b66509f7d593d2317b8c10da41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d58c8aa21d7ea89bc829434986fc2497c9185b66509f7d593d2317b8c10da41a->leave($__internal_d58c8aa21d7ea89bc829434986fc2497c9185b66509f7d593d2317b8c10da41a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7e5f03cbc0a9ab6e90c2f730969233e1c2cfcfbd05a8226dfd11c5ae875d59f9 = $this->env->getExtension("native_profiler");
        $__internal_7e5f03cbc0a9ab6e90c2f730969233e1c2cfcfbd05a8226dfd11c5ae875d59f9->enter($__internal_7e5f03cbc0a9ab6e90c2f730969233e1c2cfcfbd05a8226dfd11c5ae875d59f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7e5f03cbc0a9ab6e90c2f730969233e1c2cfcfbd05a8226dfd11c5ae875d59f9->leave($__internal_7e5f03cbc0a9ab6e90c2f730969233e1c2cfcfbd05a8226dfd11c5ae875d59f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
