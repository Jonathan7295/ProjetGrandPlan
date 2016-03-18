<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3cb9bc6d5409179b97019a63d5a5a3ecb5d83194c0039e793ca2b1679452c910 extends Twig_Template
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
        $__internal_25cf5a20bd4bd4e822f708d8490ca64f33e5cf1c642e85843e21236765e82eec = $this->env->getExtension("native_profiler");
        $__internal_25cf5a20bd4bd4e822f708d8490ca64f33e5cf1c642e85843e21236765e82eec->enter($__internal_25cf5a20bd4bd4e822f708d8490ca64f33e5cf1c642e85843e21236765e82eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_25cf5a20bd4bd4e822f708d8490ca64f33e5cf1c642e85843e21236765e82eec->leave($__internal_25cf5a20bd4bd4e822f708d8490ca64f33e5cf1c642e85843e21236765e82eec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
