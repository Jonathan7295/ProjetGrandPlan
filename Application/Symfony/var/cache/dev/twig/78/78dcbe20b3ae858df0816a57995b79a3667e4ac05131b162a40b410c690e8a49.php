<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f31f4ea473375f12fcce91e77397301ce145c25bc990f26e2ad7c13c3925282e extends Twig_Template
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
        $__internal_67eb7f1783af537e8f25214caa513c4788588db86b310880f545214f821125b8 = $this->env->getExtension("native_profiler");
        $__internal_67eb7f1783af537e8f25214caa513c4788588db86b310880f545214f821125b8->enter($__internal_67eb7f1783af537e8f25214caa513c4788588db86b310880f545214f821125b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_67eb7f1783af537e8f25214caa513c4788588db86b310880f545214f821125b8->leave($__internal_67eb7f1783af537e8f25214caa513c4788588db86b310880f545214f821125b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b642a1e642b3ec7419e965575e8c674381390894007b67b18b8ac185f402e6d4 = $this->env->getExtension("native_profiler");
        $__internal_b642a1e642b3ec7419e965575e8c674381390894007b67b18b8ac185f402e6d4->enter($__internal_b642a1e642b3ec7419e965575e8c674381390894007b67b18b8ac185f402e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b642a1e642b3ec7419e965575e8c674381390894007b67b18b8ac185f402e6d4->leave($__internal_b642a1e642b3ec7419e965575e8c674381390894007b67b18b8ac185f402e6d4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ce1861bc79372dbfe44cce51dc65eab45bd3bef79c074e4917d2aa5c5e10df7 = $this->env->getExtension("native_profiler");
        $__internal_8ce1861bc79372dbfe44cce51dc65eab45bd3bef79c074e4917d2aa5c5e10df7->enter($__internal_8ce1861bc79372dbfe44cce51dc65eab45bd3bef79c074e4917d2aa5c5e10df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ce1861bc79372dbfe44cce51dc65eab45bd3bef79c074e4917d2aa5c5e10df7->leave($__internal_8ce1861bc79372dbfe44cce51dc65eab45bd3bef79c074e4917d2aa5c5e10df7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8152275570eb8002fa40ae8495d4ed9f51ea96bf12e7dc028746a991b6aa1873 = $this->env->getExtension("native_profiler");
        $__internal_8152275570eb8002fa40ae8495d4ed9f51ea96bf12e7dc028746a991b6aa1873->enter($__internal_8152275570eb8002fa40ae8495d4ed9f51ea96bf12e7dc028746a991b6aa1873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8152275570eb8002fa40ae8495d4ed9f51ea96bf12e7dc028746a991b6aa1873->leave($__internal_8152275570eb8002fa40ae8495d4ed9f51ea96bf12e7dc028746a991b6aa1873_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
