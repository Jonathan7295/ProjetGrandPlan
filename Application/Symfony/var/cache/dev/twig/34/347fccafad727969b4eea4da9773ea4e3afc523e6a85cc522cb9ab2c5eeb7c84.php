<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_8b6dd141a4e57733ecc2e670ff82621df6c0e6dda61b5d9f3d0021431f4c1608 extends Twig_Template
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
        $__internal_e74ca9a0c2596e835d411284e308a98c2911ae8b0b14d25df1aea1b3d4f6b29c = $this->env->getExtension("native_profiler");
        $__internal_e74ca9a0c2596e835d411284e308a98c2911ae8b0b14d25df1aea1b3d4f6b29c->enter($__internal_e74ca9a0c2596e835d411284e308a98c2911ae8b0b14d25df1aea1b3d4f6b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e74ca9a0c2596e835d411284e308a98c2911ae8b0b14d25df1aea1b3d4f6b29c->leave($__internal_e74ca9a0c2596e835d411284e308a98c2911ae8b0b14d25df1aea1b3d4f6b29c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!empty($id)): ?>id="<?php echo $view->escape($id) ?>" <?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($v, array('placeholder', 'title'), true)): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
