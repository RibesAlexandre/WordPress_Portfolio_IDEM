<?php

/**
 * Class Portfolio_Social_Widget
 * --------
 * Classe permettant de gérer les réseaux sociaux dans le footer de notre thème
 * Cette classe inclut l'affichage, mais également la partie formulaire dans l'administration de Wordpress
 */
class Portfolio_Social_Widget extends WP_Widget
{
    /**
     * @var string[]
     * Champs que nous voulons gérer pour notre Widget, et afficher dans le footer
     */
    public $fields = [
        'title'     =>  'Titre',
        'credits'   =>  'Copyright',
        'facebook'  =>  'Facebook',
        'twitter'   =>  'Twitter',
        'instagram' =>  'Instagram'
    ];

    /**
     * Portfolio_Social_Widget constructor.
     * Dans le constructeur on nomme notre widget, et on l'associe à notre thème
     */
    public function __construct()
    {
        parent::__construct('portfolio_social_widget', 'Réseaux Sociaux', 'portfolio');
    }

    /**
     * On définit l'affichage de notre widget en prenant en compte notre configuration
     * globale CSS (avant le widget, et après), on inclut en dedans notre ficher
     * qui va permettre d'afficher le widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget(array $args, array $instance): void
    {
        echo $args['before_widget'];
        if( isset($instance['title']) ) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'];
            echo $title;
            echo $args['after_title'];
        }

        $template = locate_template('widgets/social.php');
        if( !empty($template) ) {
            include($template);
        }

        echo $args['after_widget'];
    }

    /**
     * @param array $instance
     *
     * On génère le formulaire, dans l'administration, permettant de gérer le widget
     */
    public function form(array $instance): void
    {
        foreach( $this->fields as $field => $label ):
            $value = $instance[$field] ?? '';
            ?>
                <p>
                    <label for="<?= $this->get_field_id($field); ?>"><?= esc_html($label); ?></label>
                    <input
                        type="text"
                       class="widefat"
                       name="<?= $this->get_field_name($field); ?>"
                       id="<?= $this->get_field_id($field); ?>"
                       value="<?= esc_attr($value); ?>"
                    />
                </p>
            <?php
        endforeach;
    }

    /**
     * @param array $newInstance
     * @param array $oldInstance
     * @return array
     *
     * Cette fonction permet de mettre à jour nos différents champs en base de donnée
     */
    public function update(array $newInstance, array $oldInstance): array
    {
        $output = [];
        foreach( $this->fields as $field => $label ) {
            if( !empty($newInstance[$field]) ) {
                $output[$field] = $newInstance[$field];
            }
        }

        return $output;
    }

}