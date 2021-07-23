$this->data->session_data = ""; After:
catch (DoesNotExist $e) {
$this->data = new SessionData(['session_id' => $id]); So it will be:
catch (DoesNotExist $e) {
$this->data = new SessionData(['session_id' => $id]);
$this->data->session_data = "";
