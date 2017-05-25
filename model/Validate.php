<?php
/**
 * Validate class is used to validate form input.
 * @author Team Point.
 * @version 2.0
 */
class Validate
{

  /** True if validation passed, false if not. */
  private $_passed = false;

  /** Holds the validation errors. (Password min 'n' characters)*/
  private $_errors = array();

  /** Holds the DB object. */
  private $_db = null;

  /**
   * Constructor for validation sets the
   * database object into the _db variable.
   */
  public function __construct()
  {
      $this->_db = DB::getInstance();
  }

  /**
   * Validates input form values against provided rules.
   * @param  array  $input      - Input form values.
   * @param  array  $form_rule  - Rules of validation.
   * @return Validate           - Returns a validation object.
   */
  public function check($input, $form_rule = array())
  {

    /* - Passed In Array Structure -
        [$form_rule][0] -> 'password' => array('field_name' => 'Password') <- [$rules][0]
        [$form_rule][1] -> 'email' => array('field_name' => 'Email') <- [$rules][1]
                          [$form_name]           [$rule]      [$rule_value]
     */

    // Loop through each rule, and check if it passes validation.
    foreach ($form_rule as $form_name => $rules) {
        foreach ($rules as $rule => $rule_value) {

        // If the form name is post_image.
        if ($form_name === 'post_image') {
          // Move to the next validation.
          continue;
        } else {
            // Get the form input.
          $value = $input[$form_name];
        }

        // Get rules for a specific field.
        $field_name = $rules['field_name'];

        // If the rule is required and empty.
        if ($rule === 'required' && empty($value)) {
            $this->add_error("{$form_name}/{$field_name} is required.");
        }

        // If the values aren't empty, check them.
        if (!empty($value)) {

          // Checks for minimum input string length.
          if ($rule === 'min' && strlen($value) < $rule_value) {
              $this->add_error("{$form_name}/{$field_name} must be a minimum of {$rule_value} characters.");
              continue;
          }

          // Checks for maximum input string length.
          if ($rule === 'max' && strlen($value) > $rule_value) {
              $this->add_error("{$form_name}/{$field_name} can be a maximum of {$rule_value} characters.");
              continue;
          }

          // Checks if two field match or not.
          if ($rule === 'matches' && $value != $input[$rule_value]) {
              $this->add_error("New passwords must match.");
          }

          // Checks if a field is all alphabet characters.
          if ($rule === 'alpha' && !ctype_alpha($value)) {
              $this->add_error("Must be only alphabet characters");
          }

          // Checks if a field doesn't contain bad words.
          $pattern = "/(anal|anus|ar5e|arrse|arse|ass|ass-fucker|asses|assfucker|assfukka|asshole|assholes|asswhole|a_s_s|b!tch|b00bs|b17ch|b1tch|ballbag|balls|ballsack|bastard|beastial|beastiality|bellend|bestial|bestiality|bi\+ch|biatch|bitch|bitcher|bitchers|bitches|bitchin|bitching|bloody|blow job|blowjob|blowjobs|boiolas|bollock|bollok|boner|boob|boobs|booobs|boooobs|booooobs|booooooobs|breasts|buceta|bugger|bum|bunny fucker|butt|butthole|buttmuch|buttplug|c0ck|c0cksucker|carpet muncher|cawk|chink|cipa|cl1t|clit|clitoris|clits|cnut|cock|cock-sucker|cockface|cockhead|cockmunch|cockmuncher|cocks|cocksuck|cocksucked|cocksucker|cocksucking|cocksucks|cocksuka|cocksukka|cok|cokmuncher|coksucka|coon|cox|crap|cum|cummer|cumming|cums|cumshot|cunilingus|cunillingus|cunnilingus|cunt|cuntlick|cuntlicker|cuntlicking|cunts|cyalis|cyberfuc|cyberfuck|cyberfucked|cyberfucker|cyberfuckers|cyberfucking|d1ck|damn|dick|dickhead|dildo|dildos|dink|dinks|dirsa|dlck|dog-fucker|doggin|dogging|donkeyribber|doosh|duche|dyke|ejaculate|ejaculated|ejaculates|ejaculating|ejaculatings|ejaculation|ejakulate|f u c k|f u c k e r|f4nny|fag|fagging|faggitt|faggot|faggs|fagot|fagots|fags|fanny|fannyflaps|fannyfucker|fanyy|fatass|fcuk|fcuker|fcuking|feck|fecker|felching|fellate|fellatio|fingerfuck|fingerfucked|fingerfucker|fingerfuckers|fingerfucking|fingerfucks|fistfuck|fistfucked|fistfucker|fistfuckers|fistfucking|fistfuckings|fistfucks|flange|fook|fooker|fuck|fucka|fucked|fucker|fuckers|fuckhead|fuckheads|fuckin|fucking|fuckings|fuckingshitmotherfucker|fuckme|fucks|fuckwhit|fuckwit|fudge packer|fudgepacker|fuk|fuker|fukker|fukkin|fuks|fukwhit|fukwit|fux|fux0r|f_u_c_k|gangbang|gangbanged|gangbangs|gaylord|gaysex|goatse|God|god-dam|god-damned|goddamn|goddamned|hardcoresex|hell|heshe|hoar|hoare|hoer|homo|hore|horniest|horny|hotsex|jack-off|jackoff|jap|jerk-off|jism|jiz|jizm|jizz|kawk|knob|knobead|knobed|knobend|knobhead|knobjocky|knobjokey|kock|kondum|kondums|kum|kummer|kumming|kums|kunilingus|l3i\+ch|l3itch|labia|lust|lusting|m0f0|m0fo|m45terbate|ma5terb8|ma5terbate|masochist|master-bate|masterb8|masterbat*|masterbat3|masterbate|masterbation|masterbations|masturbate|mo-fo|mof0|mofo|mothafuck|mothafucka|mothafuckas|mothafuckaz|mothafucked|mothafucker|mothafuckers|mothafuckin|mothafucking|mothafuckings|mothafucks|mother fucker|motherfuck|motherfucked|motherfucker|motherfuckers|motherfuckin|motherfucking|motherfuckings|motherfuckka|motherfucks|muff|mutha|muthafecker|muthafuckker|muther|mutherfucker|n1gga|n1gger|nazi|nigg3r|nigg4h|nigga|niggah|niggas|niggaz|nigger|niggers|nob|nob jokey|nobhead|nobjocky|nobjokey|numbnuts|nutsack|orgasim|orgasims|orgasm|orgasms|p0rn|pawn|pecker|penis|penisfucker|phonesex|phuck|phuk|phuked|phuking|phukked|phukking|phuks|phuq|pigfucker|pimpis|piss|pissed|pisser|pissers|pisses|pissflaps|pissin|pissing|pissoff|poop|porn|porno|pornography|pornos|prick|pricks|pron|pube|pusse|pussi|pussies|pussy|pussys|rectum|retard|rimjaw|rimming|s hit|s.o.b.|sadist|schlong|screwing|scroat|scrote|scrotum|semen|sex|sh!\+|sh!t|sh1t|shag|shagger|shaggin|shagging|shemale|shi\+|shit|shitdick|shite|shited|shitey|shitfuck|shitfull|shithead|shiting|shitings|shits|shitted|shitter|shitters|shitting|shittings|shitty|skank|slut|sluts|smegma|smut|snatch|son-of-a-bitch|spac|spunk|s_h_i_t|t1tt1e5|t1tties|teets|teez|testical|testicle|tit|titfuck|tits|titt|tittie5|tittiefucker|titties|tittyfuck|tittywank|titwank|tosser|turd|tw4t|twat|twathead|twatty|twunt|twunter|v14gra|v1gra|vagina|viagra|vulva|w00se|wang|wank|wanker|wanky|whoar|whore|willies|willy|xrated|xxx)/";

            if ($rule === 'has_no_bad_words' && preg_match($pattern, $value)) {
                if ($form_name == "post_title") {
                    $this->add_error("Title not contain bad words!");
                } elseif ($form_name == "post_pickup_location") {
                    $this->add_error("Location can not contain bad words!");
                } elseif ($form_name == "post_description") {
                    $this->add_error("Description can not contain bad words!");
                } elseif ($form_name == "user_first") {
                    $this->add_error("First name can not contain bad words!");
                } elseif ($form_name == "user_last") {
                    $this->add_error("Last name can not contain bad words!");
                } else {
                    $this->add_error($form_name . " Can not contain bad words!");
                }
            }

          // Checks if the value is unique within the database.
          if ($rule === 'unique') {
              $check = $this->_db->get('users', array($form_name, '=', $value));

              if ($check->count()) {
                  $this->add_error("user_email/Please use a different email.");
              }

              continue;
          }
        }
        }
    }

    // If there were no errors, pass the validation.
    if (empty($this->_errors)) {
        $this->_passed = true;
    }

    // Return the validation object.
    return $this;
  }

  /**
   * Adds any validation errors to _error array.
   * @param String $error  - Error message.
   */
  private function add_error($error)
  {
      $this->_errors[] = $error;
  }

  /**
   * Returns the array that holds the validation errors.
   * @return array - Returns member _error array.
   */
  public function errors()
  {
      return $this->_errors;
  }

  /**
   * Returns whether the validation passed or not.
   * @return boolean - True if validation passed, false if not.
   */
  public function passed()
  {
      return $this->_passed;
  }
}
